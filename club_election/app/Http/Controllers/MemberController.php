<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Committee;

use App\Models\Member;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $member = Member::where('user_id', $user->id)->first();

        $is_voted = DB::table('give_fors')
            ->where('voter_id', $member ? $member->id : null)
            ->exists();
        $voted_candidates = [];
        if ($is_voted) {
            $candidates = DB::table('give_fors')
                ->where('voter_id', $member->id)
                ->pluck('candidate_id')
                ->toArray();
            $voted_candidates = Candidate::whereIn('id', $candidates)
                ->get()
                ->groupBy(['committee_id', 'position_id']);
            
        }
        $committee_positons = Committee::with('positions')->get();
        $is_member = $member ? true : false;

        return view('user.dashboard', compact('is_member', 'committee_positons','voted_candidates'));
    }

    // App\Models\Candidate.php


    public function member()
    {
        return view('user.member.edit');
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

        $memberExists = Member::where('user_id', Auth::id())->exists();
        if ($memberExists) {
            return redirect()->back()->with('info', 'You are already a member!');
        }
        $validated = $request->validate([
            'department' => 'required|string|max:255',
            'year_of_study' => 'required|integer|between:1,4',
            'semester' => 'required|integer|between:1,2',
        ]);

        // Create member record
        $member = Member::create([
            'user_id' => Auth::id(),
            'department' => $validated['department'],
            'year_of_study' => $validated['year_of_study'],
            'semester' => $validated['semester'],
            'club_id' => "CPC" . Auth::id(), // Store as comma-separated string

        ]);

        // Attach clubs to member (if you have a pivot table)
        // $member->clubs()->attach($validated['clubs']);

        return redirect()->back()
            ->with('success', 'Membership application submitted successfully! It will be reviewed shortly.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $Member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $Member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $Member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $Member)
    {
        //
    }
}
