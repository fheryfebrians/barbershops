<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanggilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panggilans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->date('tgl');
            $table->time('jam');
            $table->string('paket');
            $table->enum('staff', ['capster1', 'capster2', 'capster3', 'capster4', 'capster5', 'capster6']);
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
        Schema::dropIfExists('panggilans');
    }
}
