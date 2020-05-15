<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('slug')->index()->unique();
            $table->integer('price')->default(0);
            $table->integer('price_entry')->comment('giá nhập');
            $table->integer('category_id')->default(0);
            $table->integer('admin_id')->default(0);
            $table->tinyInteger('sale')->default(0);
            $table->string('avatar')->nullable();
            $table->integer('view')->default(0);
            $table->tinyInteger('hot')->index()->default(0);
            $table->tinyInteger('active')->index()->default(0);
            $table->integer('pay')->default(0);
            $table->mediumText('description')->nullable();
            $table->text('contents')->nullable();
            $table->integer('review_total')->default(0);
            $table->integer('review_star')->default(0);
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
