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
        Schema::create('student_medical_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->unique();
            $table->string('name');
            $table->date('dob');
            $table->string('contact_info');
            $table->string('allergies');
            $table->string('emergency_contacts');
            $table->integer('insurance_informations');
            $table->string('address');
            $table->string('blood_type');
            $table->string('f_history');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_medical_profiles');
    }
};
