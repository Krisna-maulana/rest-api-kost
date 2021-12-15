<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kosts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alamat');
            $table->string('jumlahkamar');
            $table->string('harga');
            $table->string('gambarKT');
            $table->string('gambarKM');
            $table->string('gambarDepan');
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
        Schema::dropIfExists('data_kosts');
    }
}
