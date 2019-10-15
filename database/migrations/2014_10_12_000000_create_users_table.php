<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('NIC')->unique()->nullable();
            $table->string('Location')->nullable();
            $table->string('Description')->nullable();
            $table->string('catagory')->nullable();
            $table->string('position')->default("user");
            $table->integer('block')->default(0);
            $table->integer('Mobile_Number')->unique()->nullable();
            $table->integer('salary_per_hour')->default(0);
            $table->tinyInteger('available')->default(0);
            $table->integer('rating')->nullable();
            $table->string('profile_pic')->default('default.jpg');
            $table->rememberToken();
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
