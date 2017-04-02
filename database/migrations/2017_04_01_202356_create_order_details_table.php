<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up() {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('user_id');
            $table->integer('shipping_id');
            $table->date('order_date');
            $table->string('cancellation_reason')->nullable();
            $table->date('action_date')->nullable();
            $table->tinyInteger('status')->comment('0 => Pending, 1 => Delivered, 2 => Cancelled');
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
        Schema::dropIfExists('order_details');
    }

}
