<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerServices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('thumb')->nullable();
            $table->string('pictures')->nullable();
            $table->string('type');
            $table->string('number');
            $table->string('mail');
            $table->string('address');
            $table->string('service_length');
            $table->string('about');
            $table->string('payment_type');
            $table->string('discount')->nullable();
            $table->string('policy')->nullable();
            $table->string('notification')->nullable();
            $table->string('social')->nullable();
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
        Schema::dropIfExists('customer_services');
    }
}
