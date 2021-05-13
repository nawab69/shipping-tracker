<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->string('shipper_name')->nullable();
            $table->longText('shipper_address')->nullable();
            $table->string('shipper_email')->nullable();
            $table->string('shipper_phone')->nullable();
            $table->string('receiver_name')->nullable();
            $table->longText('receiver_address')->nullable();
            $table->string('receiver_email')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('shipping_type')->nullable();
            $table->string('courier')->nullable();
            $table->string('total_frieght')->nullable();
            $table->string('carrier')->nullable();
            $table->string('carrier_ref')->nullable();
            $table->time('departure_time')->nullable();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->date('pickup_date')->nullable();
            $table->time('pickup_time')->nullable();
            $table->date('expected_delivery_date')->nullable();
            $table->longText('comments')->nullable();
            $table->date('history_date')->nullable();
            $table->time('history_time')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->nullable();
            $table->longText('remarks')->nullable();
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
        Schema::dropIfExists('shippings');
    }
}
