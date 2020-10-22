<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_model', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_product')->nullable();
            $table->unsignedBigInteger('id_product_stock')->nullable();
            $table->string('feature')->nullable();
            $table->string('price')->nullable();
            $table->string('name')->nullable();
            $table->string('quantity')->nullable();
            $table->string('sku')->nullable();
            $table->timestamps();

            $table->foreign('id_product')->references('id')->on('products');
            $table->foreign('id_product_stock')->references('id')->on('products_stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_model');
    }
}
