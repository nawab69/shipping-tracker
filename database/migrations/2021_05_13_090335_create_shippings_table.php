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
            $table->string('tracking_no')->unique();
            $table->string('shipper_name')->nullable();
            $table->longText('shipper_address')->nullable();
            $table->string('shipper_email')->nullable();
            $table->string('shipper_phone')->nullable();
            $table->string('receiver_name')->nullable();
            $table->longText('receiver_address')->nullable();
            $table->string('receiver_email')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('shipping_type')->nullable();
            $table->string('shipping_mode')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('courier')->nullable();
            $table->string('total_freight')->nullable();
            $table->string('carrier')->nullable();
            $table->string('carrier_ref')->nullable();
            $table->time('departure_time')->nullable();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->date('pickup_date')->nullable();
            $table->time('pickup_time')->nullable();
            $table->date('delivery_date')->nullable();
            $table->longText('comments')->nullable();
            $table->string('status')->nullable();
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
