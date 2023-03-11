<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTestscores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testscores', function (Blueprint $table) {
            $table->id();
            $table->string("student_id",10);
            $table->string("course_id",10);
            $table->unsignedTinyInteger("score")->nullable();
            $table->foreign("student_id")->references("id")->on("students");
            $table->foreign("course_id")->references("id")->on("courses");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testscores');
    }
}
