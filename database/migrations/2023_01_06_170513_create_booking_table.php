<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customer');
            $table->foreignId('car_id')->constrained('car');
            $table->string('destination');
            $table->string('pickup_method');
            $table->string('pickup_area')->nullable();
            $table->string('area_outside_jb')->nullable();
            $table->date('pickup_date');
            $table->string('pickup_time');
            $table->date('return_date');
            $table->string('return_time');
            $table->text('renter_license');
            $table->text('renter_license_back')->nullable();
            $table->text('renter_ic');
            $table->text('renter_ic_back')->nullable();
            $table->text('renter_selfie');
            $table->string('total_price');
            $table->text('payment_receipt')->nullable();
            $table->string('status'); // 1- booked , 2- Ongoing , 3- Pending Return , 4- Done
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
        Schema::dropIfExists('booking');
    }
}
