<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_one')->nullable();
            $table->string('contact_two')->nullable();
            $table->string('gender')->nullable();
            $table->string('work_address')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('yrs_of_experience')->nullable();
            $table->string('certification')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('user_id')->unsigned()->references('id')->on('users')->onDelete('SET NULL');
            $table->string('location')->nullable();
            $table->string('proffession')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
