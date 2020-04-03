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
            $table->id();
            $table->integer('is_complete');
            $table->integer('is_host');
            $table->integer('is_helper');
            $table->date('premium_until');
            $table->char('firstname', 255);
            $table->char('lastname', 255);
            $table->char('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->char('password', 255);
            $table->char('phone', 255)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('description')->nullable();
            $table->char('city', 255)->nullable();
            $table->integer('country_id')->nullable();
            $table->string('profile_picture_url')->nullable();
            $table->rememberToken();
            $table->date('last_logged_at');
            $table->timestamps();
            $table->date('deleted_at')->nullable();
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
