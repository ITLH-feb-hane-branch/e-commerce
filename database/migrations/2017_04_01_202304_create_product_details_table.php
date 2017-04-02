<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('product_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('model_id');
            $table->integer('material_id');
            $table->string('name');
            $table->string('image_1');
            $table->string('image_2');
            $table->string('image_3');
            $table->text('description');
            $table->float('price', 8, 2);
            $table->integer('quantity');
            $table->tinyInteger('status')->comment('0 => Inactive, 1 => Active');
            $table->timestamp('created_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('created_by');
            $table->timestamp('updated_at')->nullable()->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->integer('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('product_details');
    }

}
