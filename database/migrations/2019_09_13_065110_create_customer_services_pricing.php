<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerServicesPricing extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_services_pricing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_name');
            $table->string('service_id');
            $table->string('thumb');
            $table->string('package_length');
            $table->string('package_price');
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
        Schema::dropIfExists('customer_services_pricing');
    }
}
