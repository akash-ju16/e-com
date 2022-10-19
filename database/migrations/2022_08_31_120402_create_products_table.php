<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prod_name');
            $table->string('prod_name_bangla');
            $table->text('prod_description');
            $table->integer('prod_price');
            $table->char('prod_unit');
            $table->integer('prod_stock');
            $table->string('categories_id');
            $table->string('subcategories_id');
            $table->string('prod_attribute');
            $table->string('product_image');
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
        Schema::dropIfExists('products');
    }
}
