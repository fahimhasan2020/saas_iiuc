<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerServicesBranding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_services_branding', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('branding');
            $table->string('youtube_link');
            $table->string('blog_link');
            $table->string('thumbs');
            $table->string('description');
            $table->string('discount');
            $table->string('timelength');
            $table->string('approved');
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
        Schema::dropIfExists('customer_services_branding');
    }
}
