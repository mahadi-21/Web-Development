<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Candidate;
use App\Models\Committee;
use App\Models\Member;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $committees = Committee::with('positions')->get();
        $user = Auth::user();
        $member = Member::where('user_id', $user->id)->first();

        $existingApplication = null;
        if ($member) {
            $existingApplication = Applicant::where('member_id', $member->id)
                ->with(['committee', 'position'])
               
                ->first();
        }
        


        $is_rejected = $existingApplication && $existingApplication->is_rejected ;

        $is_pending = $existingApplication && $existingApplication->is_approved and !$existingApplication->is_rejected;

        return view('user.apply', compact([
            'committees',
            'is_rejected',
            'is_pending',
            'existingApplication',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'committee_id' => 'required|exists:committees,id',
                'position_id' => 'required|exists:positions,id',
                'previous_experience' => 'nullable|string',
                'motivation' => 'nullable|string',
                'skills' => 'nullable|string',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
                'terms' => 'required|accepted',
            ]);

            $user = Auth::user();
            $member = Member::where('user_id', $user->id)->first();

            if (!$member) {
                return redirect()
                    ->route('user.dashboard')
                    ->with('error', 'You must complete your member profile before applying.');
            }

            // Check duplicate application
            $existingApplication = Applicant::where('member_id', $member->id)
                ->where('position_id', $validated['position_id'])
                ->exists();

            if ($existingApplication) {
                return redirect()
                    ->back()
                    ->with('error', 'You have already applied for this position.');
            }

            // Upload photo
            $filename = null;
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('applicants'), $filename);
            }

            Applicant::create([
                'committee_id' => $validated['committee_id'],
                'position_id' => $validated['position_id'],
                'member_id' => $member->id,
                'previous_experience' => $validated['previous_experience'] ?? null,
                'reason_for_join' => $validated['motivation'] ?? null,
                'skills_and_expertise' => $validated['skills'] ?? null,
                'recent_photo' => $filename ? 'storage/applicants/' . $filename : null,
                'is_approved' => false,
            ]);

            return redirect()
                ->back()
                ->with('success', 'Application submitted successfully.');

        } catch (\Exception $e) {
            Log::error('Applicant store failed', [
                'error' => $e->getMessage(),
                'user_id' => Auth::id(),
                'input' => $request->except('photo')
            ]);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function vote(Request $request, $candidateId)
    {
        $hasVoted = false; // ✅ define early

        try {
            $user = Auth::user();

            $member = Member::where('user_id', $user->id)->first();
            if (!$member) {
                throw new \Exception('You are not a member of this club.');
            }

            $candidate = Candidate::findOrFail($candidateId);

            // ✅ Proper check: already voted for this committee + position
            $hasVoted = DB::table('give_fors')
                ->join('candidates', 'give_fors.candidate_id', '=', 'candidates.id')
                ->where('give_fors.voter_id', $member->id)

                ->exists();

            if ($hasVoted) {
                throw new \Exception('You have already voted for this position in this committee.');
            }

            // ✅ Record vote
            DB::table('give_fors')->insert([
                'candidate_id' => $candidateId,
                'voter_id' => $member->id,
                'committee_id' => $request->committee_id,
                'position_id' => $request->position_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $candidate->increment('votes_received');


            return redirect()->back()->with('success', 'Your vote has been recorded successfully.');

        } catch (\Exception $e) {
            Log::error('Voting failed', [
                'error' => $e->getMessage()
            ]);

            return redirect()
                ->back()
                ->with('error', $e->getMessage())
                ->with('hasVoted', $hasVoted);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Applicant $applicant)
    {
        return view('admin.applicant', compact('applicant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
