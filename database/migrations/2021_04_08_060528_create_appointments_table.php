<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamp('start');
            $table->timestamp('end');
            $table->enum('status',['reserved','confirmed','finished','canceled'])->default('reserved');
            $table->unsignedInteger('client_id');
           // $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedInteger('type_id');
           // $table->foreign('type_id')->references('id')->on('roomtype');

            $table->unsignedInteger('room_id');
            //$table->foreign('room_id')->references('id')->on('rooms');

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
        Schema::dropIfExists('appointments');
    }
}
