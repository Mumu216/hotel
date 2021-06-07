<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('room_id');
            $table->integer('user_id');
            $table->dateTime('booking_from');
            $table->dateTime('booking_to');
            $table->dateTime('check_in')->nullable();
            $table->dateTime('check_out')->nullable();
            $table->text('status')->nullable();
            $table->integer('rate')->nullable();
            $table->integer('total')->nullable();
            $table->text('confirm')->default('Pending');
            $table->text('cancel')->default('Pending');

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
