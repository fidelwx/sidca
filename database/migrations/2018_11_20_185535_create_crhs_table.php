<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('nucleus_id')->unsigned();
            $table->foreign('nucleus_id')->references('id')->on('nuclei')->onDelete('cascade');
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
        Schema::dropIfExists('crhs');
    }
}
