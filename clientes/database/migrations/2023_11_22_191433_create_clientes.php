<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbClientes', function (Blueprint $table) {
            $table->id('cliId');
            $table->unsignedBigInteger('rolId');
            $table->date('cliFechaRegistro');
            $table->timestamps();
            // $table->foreign('rolId')->references('rolId')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbClientes');
    }
};
