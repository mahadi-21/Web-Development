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
        Schema::create('committees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('status', ['active', 'inactive', 'pending', 'archived'])->default('active');
            $table->enum('type', ['election', 'scrutiny', 'advisory', 'technical', 'other'])->default('election');
            $table->boolean('is_public')->default(true);
            $table->integer('max_members')->default(8);
            $table->integer('voting_threshold')->default(51);
            $table->enum('meeting_frequency', ['weekly', 'biweekly', 'monthly', 'quarterly', 'as_needed'])->default('monthly');
            $table->integer('term_duration')->default(12);
            $table->boolean('allow_self_nomination')->default(false);
            $table->boolean('require_approval')->default(true);
            $table->boolean('allow_voting')->default(true);
            $table->boolean('send_notifications')->default(true);
            $table->boolean('is_electionable')->default(false);
            $table->date('election_date')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('committees');
    }
};