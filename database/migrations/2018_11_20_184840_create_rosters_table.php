<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rosters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_memo');
            $table->string('academic_lapse');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('hired');
            $table->string('total');
            $table->string('memo_url');
            $table->string('status');
            
            $table->integer('area_id')->unsigned();
            $table->integer('headquarter_id')->unsigned();
            $table->integer('program_id')->unsigned();

            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('headquarter_id')->references('id')->on('headquarters')->onDelete('cascade');
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');



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
        Schema::dropIfExists('rosters');
    }
}
