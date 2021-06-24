<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_id')->nullable();
            $table->string('room_id')->nullable();
            $table->decimal('payment_amount')->default(0.00);
            $table->text('payment_method')->nullable();
            $table->integer('transaction_id')->nullable();
            $table->text('status')->default('Pending');
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
        Schema::dropIfExists('payments');
    }
}
