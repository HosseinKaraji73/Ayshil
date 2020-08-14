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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sub_menu_product')->index();
            $table->string('name')->nullable();
            $table->string('name_en')->nullable();
            $table->string('title');
            $table->string('title_en');
            $table->string('brand')->nullable();
            $table->string('brand_en')->nullable();
            $table->string('color')->nullable();
            $table->string('color_en')->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->integer('price_after_discount')->nullable();
            $table->integer('price_en');
            $table->text('recipes')->nullable();
            $table->text('recipes_en')->nullable();
            $table->integer('buy_count')->default(0);
            $table->integer('min')->nullable();
            $table->integer('max')->nullable();
            $table->text('code')->nullable();
            $table->float('rate')->default(0);
            $table->string('category' , 10)->comment('normal , Special , TopSelling , CleanEnergy');
            $table->boolean('available')->comment('0:!available | 1:available');
            $table->boolean('confirm')->comment('0:!confirm | 1:confirm')->nullable();
            $table->boolean('overplus')->comment('0:!overplus | 1:overplus')->nullable();
            $table->boolean('new')->comment('0:!new | 1:new')->nullable();
            $table->longText('sizing_guide')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
            $table->string('photo4')->nullable();
            $table->string('photo5')->nullable();
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
