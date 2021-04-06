<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendences', function (Blueprint $table) {
            $table->id();
            $table->date('date')->useCurrent()->nullable();
            $table->boolean('isPresent');
            // $table->unsignedBigInteger('student_id');
            $table->timestamps();
            // $table->unsignedBigInteger('student_id');

            // $table->foreign('student_id')->references('id')->on('students');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendences');
    }
}
