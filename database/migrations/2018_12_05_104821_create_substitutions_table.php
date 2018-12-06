<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('substitutions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacher_replacement');
            $table->string('teacher_replace');
            $table->integer('roster_id')->unsigned();
            $table->foreign('roster_id')->references('id')->on('rosters')->onDelete('cascade');

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
        Schema::dropIfExists('substitutions');
    }
}
