<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::paginate(10);

        $totalPositions = Position::count();
        $departmentStats = Position::all();
        return view('admin.positions.index', [
            'positions' => $positions,
            'totalPositions' => $totalPositions,
            'departmentStats' => $departmentStats,
        ]);
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
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            

        ]);

        $name = strtolower(trim($request->name));

        // Check if the position already exists (case-insensitive)
        if (Position::whereRaw('LOWER(name) = ?', [$name])->exists()) {
            return redirect()->back()->with('error','The Position is already exists!');
        }

        // Create the new position
        Position::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_electionable' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Position created successfully!');
    }




    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Position $position)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        //
    }
}
