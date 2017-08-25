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
            $table->increments('id');
            $table->string('username')->index();
            $table->string('email')->unique();
            $table->string('password');
            $table->ipAddress('ip_address')->nullable();
            $table->json('options')->nullable();
            $table->boolean('verified')->default(false);
            $table->string('token')->nullable();
            $table->boolean('status')->default(0)->comment('0 астивен, 1 заблокирован, 2 забанен на время');
            $table->timestamp('on_blocked')->nullable();
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
