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
            $table->string('fullname');
            $table->string('email');
            $table->string('contact_one');
            $table->string('contact_two')->nullable();
            $table->string('gender');
            $table->string('work_address');
            $table->string('marital_status');
            $table->string('birth_date');
            $table->string('yrs_of_experience');
            $table->string('certification')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('user_id')->unsigned()->references('id')->on('users')->onDelete('SET NULL');
            $table->integer('location_id')->unsigned()->references('id')->on('locations')->onDelete('SET NULL');
            $table->integer('proffession_id')->unsigned()->references('id')->on('proffesions')->onDelete('SET NULL');
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
