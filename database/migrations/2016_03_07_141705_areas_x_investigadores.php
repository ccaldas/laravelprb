<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AreasXInvestigadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_x_investigadores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_idareas')->unsigned();
            $table->integer('fk_idinvestigadores')->unsigned();
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
        Schema::drop('areas_x_investigadores');
    }
}
