<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('curricular_unit');
            $table->string('contest_date');
            $table->string('numberhours')->nullable();
            $table->string('approval');
            $table->integer('area_id')->unsigned();
            $table->integer('headquarter_id')->unsigned();
            $table->integer('nucleus_id')->unsigned();
            $table->integer('teacher_id')->unsigned();


            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('headquarter_id')->references('id')->on('headquarters')->onDelete('cascade');
            $table->foreign('nucleus_id')->references('id')->on('nuclei')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');

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
        Schema::dropIfExists('competitions');
    }
}
