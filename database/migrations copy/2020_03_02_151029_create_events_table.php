<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title' , 1024);
            $table->string('title_en' , 1024)->nullable();
            $table->text('description');
            $table->text('description_en')->nullable();
            $table->text('text')->nullable();
            $table->text('text_en')->nullable();
            $table->string('photo1' , 1024);
            $table->string('photo2' , 1024)->nullable();
            $table->string('photo3' , 1024)->nullable();
            $table->string('photo4' , 1024)->nullable();
            $table->string('cteated_at_fa')->nullable();
            $table->string('updated_at_fa')->nullable();
            $table->string('grouping' , 1024)->nullable();
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
        Schema::dropIfExists('events');
    }
}
