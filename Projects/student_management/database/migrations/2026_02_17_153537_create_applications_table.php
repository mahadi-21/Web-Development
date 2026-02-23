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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
             $table->foreignId('student_id')->on('students')->onDelete('cascade');
            $table->foreignId('admission_notice_id')->on('admission_notices')->onDelete('cascade');
            $table->enum('status',['pending','draft','rejected','accepted'])->default('pending');
            $table->string('previous_class');
            $table->string('apply_for');
            $table->text('reason');
            $table->text('sports_activities')->nullable();
            $table->text('achievements_awards')->nullable();
            $table->text('future_goals')->nullable();
            $table->boolean('payment_status')->default(false);
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
