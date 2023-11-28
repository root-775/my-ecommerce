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
            $table->id();
            $table->String('p_cetegory_name');
            $table->String('p_sub_cetegory_name');
            $table->String('p_sublist_category_name');
            $table->string('p_name');
            $table->string('p_sale_price');
            $table->string('p_sale_price_discount');
            $table->string('p_sale_discount_percentage');
            $table->string('p_desc');
            $table->string('p_img');
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
