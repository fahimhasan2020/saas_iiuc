<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerServicesSchedulePostponed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_services_schedule_postponed', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('schedule_id');
            $table->string('service_id');
            $table->string('reason');
            $table->string('notification');
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
        Schema::dropIfExists('customer_services_schedule_postponed');
    }
}
