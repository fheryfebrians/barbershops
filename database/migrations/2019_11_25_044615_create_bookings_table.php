<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('dewasa')->nullable();
            $table->string('anak')->nullable();
            $table->enum('paket', ['cukuranak', 'paket50k', 'paket75k', 'paket85k', 'paket80k', 'paket95k', 'paket115k', 'paket285k', 'paket125k', 'paket300k', 'paket125'])->nullable();;
            $table->enum('model', ['undercut', 'classy', 'klimis', 'slickback', 'mohawk', 'pompadour', 'lowfase', 'midfase', 'highfade', 'skinfade', 'spiky', 'quiff', 'frenchcrop']);
            $table->enum('capster', ['capster1', 'capster2', 'capster3', 'capster4', 'capster5', 'capster6']);
            $table->date('tgl_booking');
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
        Schema::dropIfExists('bookings');
    }
}
