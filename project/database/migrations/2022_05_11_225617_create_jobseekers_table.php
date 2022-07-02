<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobseekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseekers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('Birthday');
            $table->string('Nationality');
            $table->string('Linkdin_url');
            $table->string('Town_of_residence');
            $table->string('Gender');
            $table->string('Civility');
            $table->string('Level_of_education');
            $table->string('Field_of_study');

            $table->string('School');
            $table->string('School_location');
            $table->integer('from_year');
            $table->integer('to_year');
            $table->string('resume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobseekers');
    }
}