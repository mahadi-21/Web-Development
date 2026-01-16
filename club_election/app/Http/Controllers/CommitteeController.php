<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Position;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $committees = Committee::with('positions.applicants')->paginate(10);
        $total_committees = Committee::count();
        $total_active_committees = Committee::where('status','active')->count();

        return view('admin.committes.index', compact([
            'committees',
            'total_committees',
            'total_active_committees',
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
        $request->validate([
            'name' => 'required|string|max:256',
            'description' => 'nullable|string|max:256',
            'status' => 'nullable|string|max:256',
        ]);

        $name = strtolower(trim($request->name));

        if (Committee::whereRaw('LOWER(name) = ?', [$name])->exists()) {
            return redirect()->back()->with([
                'error' => 'This committee already exists!'
            ]);
        }

        Committee::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,

        ]);

        return redirect()->back()->with([
            'success' => 'Committee created successfully!'
        ]);
    }




    /**
     * Display the specified resource.
     */
    public function show(Committee $committee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Committee $committee)
    {
        $positions = Position::all();
        $selectedPositions = $committee->positions ? $committee->positions->pluck('id')->toArray() : [];

        return view('admin.committes.edit', [
            'committee' => $committee,
            'positions' => $positions,
            'selectedPositions' => $selectedPositions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Committee $committee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Committee $committee)
    {
        //
    }
}
