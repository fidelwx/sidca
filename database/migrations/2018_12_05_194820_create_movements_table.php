<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('substitution_id')->unsigned();

            $table->integer('competition_id')->unsigned();
            $table->integer('annexes_id')->unsigned();
            $table->integer('service_commission_id')->unsigned();
            $table->integer('permission_id')->unsigned();
            $table->integer('sabbatical_id')->unsigned();

             $table->foreign('annexes_id')->references('id')->on('annexes')->onDelete('cascade');
             $table->foreign('service_commission_id')->references('id')->on('service_commissions')->onDelete('cascade');
             $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
             $table->foreign('sabbatical_id')->references('id')->on('sabbaticals')->onDelete('cascade');
             $table->foreign('substitution_id')->references('id')->on('substitutions')->onDelete('cascade');

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
        Schema::dropIfExists('movements');
    }
}
