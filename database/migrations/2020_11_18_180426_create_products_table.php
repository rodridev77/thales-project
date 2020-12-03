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
            $table->string('name', 100);
            $table->decimal('cost_price', 8, 2);
            $table->decimal('sale_price', 8, 2);
            $table->string('sku', 50);
            $table->text('description', 300)->nullable();
            $table->foreignId("shop_id")->constrained("shops","id")->onDelete('cascade');
            $table->foreignId("category_id")->constrained("categories","id")->onDelete('cascade');
            $table->foreignId("brand_id")->constrained("brands","id")->onDelete('cascade');
            $table->foreignId("provider_id")->constrained("providers","id")->onDelete('cascade');
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
