<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Applicant;
use App\Models\Candidate;
use App\Models\Committee;
use App\Models\Member;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $applications = Applicant::with('member')->with('committee')->with('position')->latest()->paginate(10);

        $totalApplications = Applicant::count();
        $pendingApplications = Applicant::where('is_approved', false)->where('is_rejected', false)

            ->count();
        $approvedApplications = Applicant::where('is_approved', true)->count();
        $rejectedApplications = Applicant::where('is_rejected', true)->count();

        return view('admin.dashboard', compact(
            'applications',
            'totalApplications',
            'pendingApplications',
            'approvedApplications',
            'rejectedApplications'
        ));
    }
    public function superAdmin(Request $request)
    {
        $user = Auth::user();

        if ($request->secret_code == 'kiucpc1') {
            $user->update([
                'role' => 'admin',

            ]);
            Admin::create([
                'user_id' => $user->id,
                'position' => 'Super Admin',
                'permissions' => 'all',
            ]);
            return redirect()->route('admin.dashboard')->with('success', 'You are now a Super Admin.');

        }
        else {
            return redirect()->back()->with('error', 'Invalid secret code.');
        }

    }



    public function approve(Applicant $application)
    {
        try {
            DB::transaction(function () use ($application) {
                $application->update([
                    'is_approved' => true,
                ]);

                $user = Auth::user();
                $admin = Admin::where('user_id', $user->id)->firstOrFail();


                Candidate::create([
                    'applicant_id' => $application->id,
                    'approved_by' => $admin->id,
                    'manifesto' => $application->reason_for_join,
                    'committee_id' => $application->committee_id,
                    'position_id' => $application->position_id,
                ]);
            });

            return back()->with(
                'success',
                'Applicant is approved by ' . Auth::user()->name
            );

        } catch (Exception $e) {
            report($e);

            return back()->with(
                'error',
                'Failed to approve applicant. Please try again.' . $e->getMessage()
            );
        }
    }


    public function reject(Applicant $application)
    {
        $application->update([
            'is_approved' => false,
            'is_rejected' => true,

        ]);

        return redirect()->back()->with('success', 'Applicant has been rejected successfully.');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }


    public function makeAdmin()
    {
        $members = Member::with('user')->get();

        return view('admin.make', compact('members'));

    }
    public function Admin(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
        ]);

        try {
            DB::beginTransaction();

            $memberId = $request->input('member_id');

            // Get member
            $member = Member::findOrFail($memberId);

            // Get user
            $user = User::findOrFail($member->user_id);

            // Update user role
            $user->update([
                'role' => 'admin',
            ]);

            $member->delete();


            // Create admin record
            Admin::create([
                'user_id' => $user->id,
                'position' => 'Admin',
                'permissions' => 'all',
            ]);

            DB::commit();

            return back()->with('success', 'Member has been granted admin access successfully.');

        } catch (\Throwable $e) {
            DB::rollBack();


            Log::error($e);

            return back()->with('error', 'Failed to grant admin access. Please try again.' . $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
    public function result()
    {
        // Get all committees with their positions
        $committees = Committee::with(
            'positions'
        )->get();

        // Calculate statistics
        $totalCandidates = Candidate::count();
        $totalVoters = Member::count();
        $totalVotes = DB::table('give_fors')->count();

        $totalCommittees = Committee::count();

        // Calculate vote percentage
        $uniqueVoters = DB::table('give_fors')->distinct('voter_id')->count('voter_id');

        $votePercentage = $totalVoters > 0 ? ($uniqueVoters / $totalVoters) * 100 : 0;

        // Prepare results data
        $results = [];
        $committeeVotes = [];

        foreach ($committees as $committee) {
            $committeeTotalVotes = 0;


            // Use empty collection if positions don't exist
            $positions = $committee->positions ?? collect();

            foreach ($positions as $position) {
                $positionCandidates = [];

                // Use empty collection if candidates don't exist
                $candidates = Candidate::with('applicant.member')->where('committee_id', $committee->id)->where('position_id', $position->id)->get();

                foreach ($candidates as $candidate) {
                    $voteCount = $candidate->votes_received ? $candidate->votes_received : 0;
                    $committeeTotalVotes += $voteCount;

                    $positionCandidates[] = (object) [
                        'candidate' => $candidate,
                        'votes' => $voteCount,
                        'applicant' => $candidate->applicant ?? null,
                        'user' => optional($candidate->applicant)->member->user ?? null
                    ];
                }

                // Sort by votes descending
                usort($positionCandidates, function ($a, $b) {
                    return $b->votes <=> $a->votes;
                });

                $results[$committee->id][$position->id] = collect($positionCandidates);
            }

            $committeeVotes[$committee->id] = $committeeTotalVotes;
        }

        return view('admin.result', compact(
            'committees',
            'totalCandidates',
            'totalVoters',
            'votePercentage',
            'totalVotes',
            'totalCommittees',
            'results',
            'committeeVotes'
        ));
    }
}
