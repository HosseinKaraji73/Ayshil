<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('link')->nullable();
            $table->string('title')->nullable();
            $table->string('title_en')->nullable();
            $table->string('time')->nullable();
            $table->string('time_en')->nullable();
            $table->string('picture')->nullable();
            $table->string('fav')->default('0');
            $table->string('description')->nullable();
            $table->string('description_en')->nullable();
            $table->string('category' , 10)->nullable();
            $table->string('category_en' , 10)->nullable();
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
        Schema::dropIfExists('videos');
    }
}
