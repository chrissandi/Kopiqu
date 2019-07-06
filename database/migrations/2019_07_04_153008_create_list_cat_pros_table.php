<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListCatProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_cat_pros', function (Blueprint $table) {
            $table->bigInteger('idProduk')->unsigned();
            $table->foreign('idProduk')->references('idProduk')->on('products');
            $table->integer('idKategori')->unsigned();
            $table->foreign('idKategori')->references('idKategori')->on('categories');
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
        Schema::dropIfExists('list_cat_pros');
    }
}
