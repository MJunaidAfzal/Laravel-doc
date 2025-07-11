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
        Schema::create('doctor_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('doctor_id')->unique();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('display_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('phone_number')->nullable();

            $table->json('languages')->nullable(); 
            $table->string('profile_image')->nullable();

            $table->json('memberships')->nullable(); 
            $table->text('address')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_profiles');
    }
};
