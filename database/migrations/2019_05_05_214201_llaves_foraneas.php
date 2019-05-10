<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LlavesForaneas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('producto', function (Blueprint $table) {
            $table->unsignedBigInteger('id_categoria')->change();
            $table->unsignedBigInteger('id_proveedor')->change();
            $table->foreign('id_categoria')->references('id')->on('categoria');
            $table->foreign('id_proveedor')->references('id')->on('proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
