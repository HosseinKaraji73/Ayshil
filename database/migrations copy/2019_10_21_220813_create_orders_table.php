<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->integer('product_id')->unsigned()->index();
            $table->integer('owner_id')->unsigned()->index()->nullable();
            $table->string('product_price' , 255)->nullable();
            $table->integer('order_count')->nullable();
            $table->string('invoice_id' , 255)->nullable();
            $table->integer('pay_location')->nullable();
            $table->string('status' , 255)->comment('Supply , Preparation, Packing , Send')->nullable();
            $table->boolean('cancel')->comment('0:!cancel | 1:cancel')->nullable();
            $table->string('address' , 1024)->nullable();
            $table->string('description' , 1024)->nullable();
            $table->string('date_create' , 255)->nullable();
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
        Schema::dropIfExists('orders');
    }
}
