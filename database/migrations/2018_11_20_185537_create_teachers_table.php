<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('identity')->unique();
            $table->date('birthdate');
            $table->string('address');
            $table->unsignedInteger('countrie_id');
            $table->unsignedInteger('crh_id');

            $table->integer('roster_id')->unsigned();

            $table->unsignedInteger('state_id');
            $table->unsignedInteger('classification_id');
            $table->unsignedInteger('headquarter_id');
            $table->enum('status', ['activo', 'inactivo']);
            $table->string('observation');

            $table->foreign('classification_id')->references('id')->on('classifications')->onDelete('cascade');
            $table->foreign('countrie_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('headquarter_id')->references('id')->on('headquarters')->onDelete('cascade');
            $table->foreign('roster_id')->references('id')->on('rosters')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
