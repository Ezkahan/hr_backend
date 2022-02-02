<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleSkillTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('people_skill', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('skill_id');
            $table->unsignedBigInteger('people_id');
            $table->tinyInteger('level')->nullable();
            $table->unsignedInteger('skill_type_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people_skills');
    }
}
