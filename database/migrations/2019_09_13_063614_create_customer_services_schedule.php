<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerServicesSchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_services_schedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('service_id');
            $table->string('days');
            $table->string('schedule');
            $table->string('timezone');
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
        Schema::dropIfExists('customer_services_schedule');
    }
}
