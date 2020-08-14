<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSubMenuProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sub_menu_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('subMenuProducts_id')->unsigned()->index()->nullable();
            $table->string('name', 50)->nullable();
            $table->string('name_en', 50)->nullable();
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
        Schema::dropIfExists('sub_sub_menu_products');
    }
}
