<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedAddForeignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->unsignedInteger('state_id')->nullable();
            $table->unsignedInteger('municipality_id')->nullable();
            $table->unsignedInteger('parish_id')->nullable();

            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('cascade');
            $table->foreign('parish_id')->references('id')->on('parishes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign(['state_id']);
            $table->dropForeign(['municipality_id']);
            $table->dropForeign(['parish_id']);
        });
    }
}
