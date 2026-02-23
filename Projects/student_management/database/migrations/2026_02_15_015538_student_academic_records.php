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
        Schema::create('student_academic_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->string('academic_year');
            $table->string('class');
            $table->string('section')->nullable();
            $table->string('roll_number')->nullable();
            $table->json('subjects')->nullable();
            $table->json('grades')->nullable();
            $table->decimal('gpa', 3, 2)->nullable();
            $table->integer('rank')->nullable();
            $table->enum('term', ['first', 'second', 'third', 'final'])->default('first');
            $table->text('remarks')->nullable();
            $table->timestamps();
            
            $table->index(['student_id', 'academic_year', 'term']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_academic_records');
    }
};