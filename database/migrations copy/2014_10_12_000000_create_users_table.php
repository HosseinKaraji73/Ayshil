<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->default('لطفا نام خود را وارد کنید');
            $table->string('family', 255)->default('لطفا نام خانوادگی خود را وارد کنید');
            $table->string('mobile', 11)->unique();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('birthDate')->nullable();
            $table->string('address', 1024)->nullable();
            $table->string('latitude', 1024)->nullable();
            $table->string('longitude', 1024)->nullable();
            $table->string('reagent', 255)->nullable();
            $table->string('parentReagent', 255)->nullable();
            $table->integer('roleId')->comment('0:admin | 1:owner | 2:user');
            $table->string('avatar', 255)->nullable();
            $table->string('banner', 255)->nullable();
            $table->boolean('active')->default(1)->comment('0:!active | 1:active');
            $table->string('credit', 255)->default(0)->nullable();
            $table->integer('rate')->nullable();
            $table->integer('buy_count')->nullable();
            $table->string('service', 255)->nullable();
            $table->string('category', 10)->nullable();
            $table->integer('verify_code')->nullable();
            $table->string('password', 255);
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
