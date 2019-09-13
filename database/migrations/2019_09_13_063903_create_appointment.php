<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('time');
            $table->string('duration');
            $table->string('user_id');
            $table->string('provider_id');
            $table->string('service_id');
            $table->string('payment_process');
            $table->string('coupon')->nullable();
            $table->string('type');
            $table->string('discount')->nullable();
            $table->string('description')->nullable();
            $table->string('agreement')->nullable();
            $table->string('notification')->nullable();
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
        Schema::dropIfExists('appointment');
    }
}
