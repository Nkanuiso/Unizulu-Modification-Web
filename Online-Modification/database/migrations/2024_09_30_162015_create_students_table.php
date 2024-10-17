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
            $table->string('name');
            $table->string('Surname');
            $table->integer('Student_number');
            $table->string('Email');
            $table->string('cellphone', 10)->default('+27');
            $table->string('Old_Programme');
            $table->string('New_Programme');
            $table->string('Module');
            $table->integer('Semester', );
            $table->string('Module_Description');
            $table->text('Reason');
            $table->string('Modules');
            $table->integer('Semesta',);
            $table->string('Module_Descriptions');
            $table->text('Reasons');
            $table->timestamps();
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
