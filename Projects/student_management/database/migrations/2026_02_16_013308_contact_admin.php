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
        Schema::create('contact_admin', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            
            $table->foreignId('student_id')->on('students')->onDelete('cascade');
            $table->foreignId('application_id')->on('applications')->onDelete('cascade');
            $table->string('email');
            $table->string('class');
            $table->string('type');
            $table->string('subject');
            $table->string('priority');
             $table->enum('status',['open','in_progress','closed'])->default('open');

            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
