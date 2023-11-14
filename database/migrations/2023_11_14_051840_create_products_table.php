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
            $table->string('product_name', 255);
            $table->unsignedBigInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('categories');
            $table->string('product_code', 20)->nullable();
            $table->enum('is_active', ['1', '0'])->default('1');
            // $table->timestamps();
            $table->timestamp('created_at')->default(now());
            $table->timestamp('updated_at')->nullable()->default(null)->onUpdate(now());
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2)->default(0.00);
            $table->string('unit', 100)->default('PCS')->comment('satuan');
            $table->decimal('discount_amount', 15, 2)->default(0.00);
            $table->integer('stock')->default(0)->comment('stock');
            $table->text('image')->nullable()->comment('gambar dari product');
            $table->index('product_code');
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
