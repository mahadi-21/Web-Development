<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Link to users table for authentication
                    
            $table->string('student_id')->unique(); 
            $table->string('roll_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('blood_group')->nullable();
            
            // Contact Information
            $table->string('phone')->nullable();
            $table->string('alternative_phone')->nullable();
            $table->text('address')->nullable();
            
            $table->string('country')->default('Bangladesh');
            
            // Academic Information
            $table->string('current_class')->nullable();
            $table->string('section')->nullable();
            $table->string('academic_year')->nullable();
            $table->date('admission_date')->nullable();
            $table->string('previous_school')->nullable();
            
            // Guardian Information
            $table->string('guardian_name')->nullable();
            $table->string('guardian_relation')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_email')->nullable();
            $table->text('guardian_address')->nullable();
            $table->string('guardian_occupation')->nullable();
            
            // Medical Information
            $table->text('medical_conditions')->nullable();
            $table->text('allergies')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();
            $table->string('emergency_contact_relation')->nullable();
            
            // Profile & Status
            $table->string('profile_photo')->nullable();
            $table->enum('status', ['regular', 'irregular', 'passed', 'failed'])->default('regular');
            $table->enum('enrollment_status', ['enrolled', 'pending', 'withdrawn'])->default('enrolled');
            
            // Statistics (can be updated via events/jobs)
            $table->decimal('attendance_percentage', 5, 2)->default(0);
            $table->decimal('current_gpa', 3, 2)->default(0);
            $table->integer('class_rank')->nullable();
            $table->integer('total_students_in_class')->nullable();
            
            // Fees Related
            $table->enum('fees_status', ['paid', 'pending', 'partial'])->default('pending');
            $table->date('fees_due_date')->nullable();
            $table->decimal('total_fees', 10, 2)->default(0);
            $table->decimal('paid_fees', 10, 2)->default(0);
            
            // System Fields

            
            $table->softDeletes(); // For preserving records when students leave
            $table->timestamps();
            
            // Indexes for better query performance
            $table->index('student_id');
           
            $table->index('status');
            $table->index('current_class');
            $table->index('admission_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};