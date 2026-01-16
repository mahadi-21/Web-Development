<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Committee_Positions;
use Illuminate\Http\Request;

class CommitteePositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            // Validate request
            $request->validate([
                'id' => 'required|integer|exists:committees,id',
                'positions' => 'nullable|array',
                'positions.*' => 'integer|exists:positions,id',
                'name' => 'required|string|max:255',
                'desciption' => 'nullable|string|max:255',
                'max_members' => 'required|integer|min:1|max:50',
                'voting_threshold' => 'required|integer|min:50|max:100',
                'meeting_frequency' => 'required|string',
                'term_duration' => 'required|integer|min:1|max:36',
                'require_approval' => 'boolean',
                'allow_voting' => 'boolean',
                'send_notifications' => 'boolean',
                'election_date' => 'required|date',
            ]);

            // Find the committee
            $committee = Committee::findOrFail($request->id);

            // Prepare update data for changed fields
            $updateData = [];
            $hasChanges = false;

            $fieldsToCheck = ['name', 'max_members', 'voting_threshold', 'meeting_frequency', 'term_duration','description','election_date'];
            foreach ($fieldsToCheck as $field) {
                if ($request->has($field) && $request->$field != $committee->$field) {
                    $updateData[$field] = $request->$field;
                    $hasChanges = true;
                }
            }

            // Boolean fields
            $booleanFields = [
                'require_approval' => $request->has('require_approval'),
                'allow_voting' => $request->has('allow_voting'),
                'send_notifications' => $request->has('send_notifications'),
                'allow_self_nomination' => $request->has('allow_self_nomination'),
                'is_electionable' => $request->has('is_electionable'),
                
            ];
            foreach ($booleanFields as $field => $value) {
                if ($value != $committee->$field) {
                    $updateData[$field] = $value;
                    $hasChanges = true;
                }
            }

            // Update only if there are changes
            if ($hasChanges && !empty($updateData)) {
                $committee->update($updateData);
            }

            // Handle positions
            $positionChanged = false;
            if ($request->has('positions')) {
                $currentPositions = $committee->positions()->pluck('positions.id')->toArray();
                $newPositions = $request->positions ?? [];
                sort($currentPositions);
                sort($newPositions);

                if ($currentPositions != $newPositions) {
                    $committee->positions()->sync($newPositions);
                    $positionChanged = true;
                }
            }

            // Response
            if ($hasChanges || $positionChanged) {
                return redirect()->back()->with('success', 'Updated successfully!');
            } else {
                return redirect()->back()->with('info', 'No changes were made.');
            }
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Handle other errors
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }





    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
