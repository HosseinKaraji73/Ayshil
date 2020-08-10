<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title1')->nullable();
            $table->string('title1_en')->nullable();
            $table->string('title2')->nullable();
            $table->string('title2_en')->nullable();
            $table->string('title3')->nullable();
            $table->string('title3_en')->nullable();
            $table->string('title4')->nullable();
            $table->string('title4_en')->nullable();
            $table->string('photo1', 50);
            $table->string('photo2', 50);
            $table->string('photo3', 50);
            $table->string('address1')->nullable();
            $table->string('address1_en')->nullable();
            $table->string('address2')->nullable();
            $table->string('address2_en')->nullable();
            $table->string('address3')->nullable();
            $table->string('address3_en')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone1_en')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone2_en')->nullable();
            $table->string('phone3')->nullable();
            $table->string('phone3_en')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
