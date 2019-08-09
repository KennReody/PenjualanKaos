<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTshirt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_tshirt', function (Blueprint $table) {
            $table->increments('id_tshirt');
            $table->string('nama_tshirt');
            $table->string('type');
            $table->string('warna_produk');
            $table->string('ukuran');
            $table->string('stock');
            $table->string('harga');
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
        Schema::dropIfExists('table_tshirt');
    }
}
