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
        Schema::create('student_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->string('activity_type'); // fees_payment, exam_result, attendance, library_book, parent_meeting
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('status', ['completed', 'pending', 'published', 'due_soon', 'attended'])->default('pending');
            $table->json('metadata')->nullable(); // Additional data like payment amount, book details etc.
            $table->timestamp('activity_date');
            $table->timestamps();
            
            $table->index(['student_id', 'activity_date']);
            $table->index('activity_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_activities');
    }
};