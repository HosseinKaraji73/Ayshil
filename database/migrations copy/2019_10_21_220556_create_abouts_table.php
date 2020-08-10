<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teamTitle1',100)->nullable();
            $table->string('teamTitle1_en',100)->nullable();
            $table->string('teamTitle2',100)->nullable();
            $table->string('teamTitle2_en',100)->nullable();
            $table->string('teamTitle3',100)->nullable();
            $table->string('teamTitle3_en',100)->nullable();
            $table->string('teamTitle4',100)->nullable();
            $table->string('teamTitle4_en',100)->nullable();
            $table->string('teamRelative1',100)->nullable();
            $table->string('teamRelative1_en',100)->nullable();
            $table->string('teamRelative2',100)->nullable();
            $table->string('teamRelative2_en',100)->nullable();
            $table->string('teamRelative3',100)->nullable();
            $table->string('teamRelative3_en',100)->nullable();
            $table->string('teamRelative4',100)->nullable();
            $table->string('teamRelative4_en',100)->nullable();
            $table->string('teamDescrition1')->nullable();
            $table->string('teamDescrition1_en')->nullable();
            $table->string('teamDescrition2')->nullable();
            $table->string('teamDescrition2_en')->nullable();
            $table->string('teamDescrition3')->nullable();
            $table->string('teamDescrition3_en')->nullable();
            $table->string('teamDescrition4')->nullable();
            $table->string('teamDescrition4_en')->nullable();
            $table->string('teamPhoto1',100)->nullable();
            $table->string('teamPhoto2',100)->nullable();
            $table->string('teamPhoto3',100)->nullable();
            $table->string('teamPhoto4',100)->nullable();
            $table->text('text1')->nullable();
            $table->text('text1_en')->nullable();
            $table->text('text2')->nullable();
            $table->text('text2_en')->nullable();
            $table->text('text3')->nullable();
            $table->text('text3_en')->nullable();
            $table->text('text4')->nullable();
            $table->text('text4_en')->nullable();
            $table->text('text5')->nullable();
            $table->text('text5_en')->nullable();
            $table->text('text6')->nullable();
            $table->text('text6_en')->nullable();
            $table->string('photo1', 50);
            $table->string('photo2', 50);
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
        Schema::dropIfExists('abouts');
    }
}
