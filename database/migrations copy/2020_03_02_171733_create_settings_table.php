<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo1', 1024)->nullable();
            $table->string('photo2', 1024)->nullable();
            $table->string('photo3', 1024)->nullable();
            $table->string('photo4', 1024)->nullable();
            $table->string('photo5', 1024)->nullable();
            $table->string('photo6', 1024)->nullable();
            $table->string('photo7', 1024)->nullable();
            $table->string('photo8', 1024)->nullable();
            $table->string('photo9', 1024)->nullable();
            $table->string('photo10', 1024)->nullable();
            $table->text('title1')->nullable();
            $table->text('title1_en')->nullable();
            $table->text('title2')->nullable();
            $table->text('title2_en')->nullable();
            $table->text('title3')->nullable();
            $table->text('title3_en')->nullable();
            $table->text('title4')->nullable();
            $table->text('title4_en')->nullable();
            $table->text('text1')->nullable();
            $table->text('text1_en')->nullable();
            $table->text('text2')->nullable();
            $table->text('text2_en')->nullable();
            $table->text('text3')->nullable();
            $table->text('text3_en')->nullable();
            $table->text('text4')->nullable();
            $table->text('text4_en')->nullable();
            $table->boolean('bank_portal')->default('0');
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
        Schema::dropIfExists('settings');
    }
}
