<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('discount_id')->nullable();
            $table->integer('discount_user_id')->nullable();
            $table->string('invoice_id' , 100);
            $table->integer('bank_invoice_id');
            $table->integer('bank_receipt');
            $table->string('price' , 100);
            $table->string('cart_cost' , 100);
            $table->string('discountPrice' , 100);
            $table->string('tax_percent' , 100);
            $table->string('authority' , 150);
            $table->string('date_create' , 100);
            $table->string('discount_type' , 100)->nullable();
            $table->boolean('payed')->default(0)->comment('0:!payed | 1:payed');
            $table->string('reference' , 100)->nullable();
            $table->string('payment_method' , 50)->comment('wallet , online');
            $table->string('gateway_type' , 50);
            $table->boolean('type')->comment('0:online | 1:payLocation')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
