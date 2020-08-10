<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title1')->nullable();
            $table->text('title1_en')->nullable();
            $table->text('title2')->nullable();
            $table->text('title2_en')->nullable();
            $table->text('title3')->nullable();
            $table->text('title3_en')->nullable();
            $table->text('title4')->nullable();
            $table->text('title4_en')->nullable();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->text('photo1')->nullable();
            $table->text('photo2')->nullable();
            $table->text('photo3')->nullable();
            $table->text('photo4')->nullable();
            $table->text('group')->nullable();
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
        Schema::dropIfExists('sliders');
    }
}
