<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('shipping_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->bigInteger('mobile_number');
            $table->tinyInteger('status')->comment('0 => Inactive, 1 => Active');
            $table->timestamp('created_at')->nullable();
            $table->integer('created_by');
            $table->timestamp('updated_at')->nullable();
            $table->integer('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('shipping_details');
    }

}
