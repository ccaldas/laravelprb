<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Investigadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',45);
            $table->date('fechanacimiento');
            $table->string('codigo',20);
            $table->string('direccion',45);
            $table->string('telefono',20);
            $table->integer('fk_idfacultades')->unsigned();
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
        Schema::drop('investigadores');
    }
}
