<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function(Blueprint $table)
        {
            $table->increments('id');
                       
            $table->integer('users_id');
            $table->integer('term_course_id');
            
            $table->string('number_course');
            $table->string('name_course');
            $table->string('credits');
            $table->integer('groups');
            $table->integer('number_instructors');
            $table->integer('number_student');
            $table->string('date_teach');
            $table->string('time_teach');
            $table->integer('hour_practice');
            $table->integer('hour_describe');
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
        //
    }
}
