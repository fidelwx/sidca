<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annexes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('article', ['61', '64']);
            $table->string('college');
            $table->string('title_obtained');
            $table->string('title_work');
            $table->string('recognition');

            $table->integer('classification_id')->unsigned();
            $table->integer('teacher_id')->unsigned();

            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('cascade');
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
        Schema::dropIfExists('annexes');
    }
}
