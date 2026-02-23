<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $student = Student::where('user_id', $user->id)->first();

        return view('student.profile', compact('user', 'student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('student.register', compact('user'));
    }


    public function registration(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'dob' => 'required|date|before:today',
            'gender' => 'required|in:male,female,other',
            'blood_group' => 'required|string|max:5',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'class' => 'required|string|max:50',
            'section' => 'required|string|max:50',
            'previous_school' => 'nullable|string|max:255',
            'guardian_name' => 'required|string|max:255',
            'guardian_relationship' => 'required|string|max:100',
            'guardian_phone' => 'required|string|max:20',
            'guardian_email' => 'required|email|max:255',
            'guardian_occupation' => 'required|string|max:255',
            'medical_conditions' => 'nullable|string|max:1000',
            'allergies' => 'nullable|string|max:1000',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_number' => 'required|string|max:20',
            'profile_photo' => 'required|image|max:2048',
        ]);

        DB::beginTransaction();

        try {

            $user = Auth::user();

            // Upload Photo
            $profilePhotoPath = null;

            if ($request->hasFile('profile_photo')) {

                $file = $request->file('profile_photo');
                $fileName = time() . '_' . $file->getClientOriginalName();

                $file->move(public_path('profile_photos'), $fileName);

                $profilePhotoPath = 'profile_photos/' . $fileName;
            }

            // Create Student
            Student::create([
                'user_id' => $user->id,
                'student_id' => 'S' . $request->class . '-' . str_pad($user->id, 5, '0', STR_PAD_LEFT),
                'roll_number' => 'R' . $request->class . '-' . str_pad($user->id, 5, '0', STR_PAD_LEFT),
                'date_of_birth' => $request->dob,
                'gender' => $request->gender,
                'blood_group' => $request->blood_group,
                'phone' => $request->phone,
                'address' => $request->address,
                'current_class' => $request->class,
                'section' => $request->section,
                'previous_school' => $request->previous_school,
                'guardian_name' => $request->guardian_name,
                'guardian_relation' => $request->guardian_relationship,
                'guardian_phone' => $request->guardian_phone,
                'guardian_email' => $request->guardian_email,
                'guardian_occupation' => $request->guardian_occupation,
                'medical_conditions' => $request->medical_conditions,
                'allergies' => $request->allergies,
                'emergency_contact_name' => $request->emergency_contact_name,
                'emergency_contact_phone' => $request->emergency_contact_number,
                'profile_photo' => $profilePhotoPath,
            ]);

            // Update User
            $user = User::find($user->id);
            $user->is_registered = true;
            $user->save();

            DB::commit();

            return redirect()->route('student.profile')
                ->with('success', 'Registration successful!');

        } catch (\Exception $e) {

            DB::rollBack();

            return back()->with('error', 'Something went wrong!'.$e->getMessage())
                ->withInput();
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
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
