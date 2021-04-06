<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('class');
            $table->string('phone');
            $table->string('dob');
            $table->string('image');

            //$table->unsignedBigInteger('course_id');
            $table->timestamps();

           // $table->foreign('course_id')->references('id')->on('teachers');
           
           
        });
       
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');  
        // Schema::table('teachers', function($table) {
        //     $table->unsignedInteger('course_id')->nullable();
        //     $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        // });
    }
}
