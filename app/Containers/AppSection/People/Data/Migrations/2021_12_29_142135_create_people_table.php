<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('patronymic')->nullable();
            $table->string('registered_at')->nullable();
            $table->unsignedInteger('passport_series_id')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('passport_issue_date')->nullable();
            $table->string('passport_issued_by_id')->nullable();
            $table->longText('passport_comment')->nullable();
            $table->string('born_date')->nullable();
            $table->unsignedInteger('education_type_id')->nullable();
            $table->string('marital')->nullable();
            $table->string('children')->nullable();
            $table->string('driver_classes')->nullable();
            $table->boolean('military')->default(false);
            $table->boolean('sentence')->default(false);
            $table->boolean('dead')->default(false);
            $table->tinyInteger('gender')->default(0);
            $table->tinyInteger('relocation')->default(0);
            $table->tinyInteger('shift')->default(0);
            $table->tinyInteger('dontdisturb')->default(0);
            $table->longText('dontdisturb_notes')->nullable();
            $table->tinyInteger('vip')->default(0);
            $table->longText('vip_notes')->nullable();
            $table->tinyInteger('blacklist')->default(0);
            $table->longText('blacklist_notes')->nullable();
            $table->longText('status_comment')->nullable();
            $table->tinyInteger('hascar')->default(0);
            $table->unsignedInteger('nationality_id')->nullable();
            $table->string('min_salary')->nullable();
            $table->tinyInteger('salary_currency')->default(1);
            $table->json('description')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
}
