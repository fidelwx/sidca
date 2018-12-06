<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNucleiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nuclei', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nucleus');
            $table->unsignedInteger('headquarter_id');
            $table->foreign('headquarter_id')->references('id')->on('headquarters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nuclei');
    }
}
