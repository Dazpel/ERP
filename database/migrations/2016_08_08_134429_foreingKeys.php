<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeingKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sueldos', function ($table) {
            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('compra', function ($table) {
            $table->integer('pro_id')->unsigned();

            $table->foreign('pro_id')->references('id')->on('proveedores');
        });

        Schema::table('inventario', function ($table) {
            $table->integer('comp_id')->unsigned();

            $table->foreign('comp_id')->references('id')->on('compra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
