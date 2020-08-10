<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent_id')->nullable();
            $table->string('name' , 1024)->nullable();
            $table->string('family' , 1024)->nullable();
            $table->string('subject' , 1024)->nullable();
            $table->string('proficiency' , 1024)->nullable();
            $table->string('email' , 1024)->nullable();
            $table->string('phone' , 1024)->nullable();
            $table->longText('message')->nullable();
            $table->string('group',1024)->nullable();
            $table->string('pdf' , 1024)->nullable();
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
        Schema::dropIfExists('forms');
    }
}
