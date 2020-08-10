<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('link')->nullable();
            $table->string('logo1')->nullable();
            $table->string('logo2')->nullable();
            $table->string('logo3')->nullable();
            $table->string('logo4')->nullable();
            $table->string('description')->nullable();
            $table->string('description_en')->nullable();
            $table->string('enemad')->nullable();
            $table->string('resane')->nullable();
            $table->string('qr')->nullable();
            $table->string('kasbokar')->nullable();
            $table->string('bank')->nullable();
            $table->string('supportPhone')->nullable();
            $table->string('supportPhone_en')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone1_en')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone2_en')->nullable();
            $table->string('phone3')->nullable();
            $table->string('phone3_en')->nullable();
            $table->string('phone4')->nullable();
            $table->string('phone4_en')->nullable();
            $table->string('email')->nullable();
            $table->string('address1')->nullable();
            $table->string('address1_en')->nullable();
            $table->string('address2')->nullable();
            $table->string('address2_en')->nullable();
            $table->string('address3')->nullable();
            $table->string('address3_en')->nullable();
            $table->string('address4')->nullable();
            $table->string('address4_en')->nullable();
            $table->string('company')->nullable();
            $table->string('company_en')->nullable();
            $table->string('telegram')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsApp')->nullable();
            $table->string('eitta')->nullable();
            $table->string('soroush')->nullable();
            $table->string('gap')->nullable();
            $table->string('google')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('tumblr')->nullable();
            $table->string('gab')->nullable();
            $table->string('reddit')->nullable();
            $table->string('rss')->nullable();
            $table->string('line')->nullable();
            $table->string('Tango')->nullable();
            $table->string('othertext1')->nullable();
            $table->string('othertext1_en')->nullable();
            $table->string('othertext2')->nullable();
            $table->string('othertext2_en')->nullable();
            $table->string('othertext3')->nullable();
            $table->string('othertext3_en')->nullable();
            $table->string('othertext4')->nullable();
            $table->string('othertext4_en')->nullable();
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
        Schema::dropIfExists('footers');
    }
}
