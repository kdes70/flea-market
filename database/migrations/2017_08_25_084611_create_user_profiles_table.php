<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->date('birthday');
            $table->string('first_name', 30)->nullable();
            $table->string('last_name', 30)->nullable();
            $table->text('bio')->nullable();
            $table->string('avatar')/*->default(config('user-profile.user.default.avatar'))*/;
            $table->string('country')->nullable();
            $table->string('location')->nullable();
            $table->string('phone')->nullable();
            $table->string('notes')->nullable();
            $table->text('description')->nullable();
            $table->json('options')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles', function(Blueprint $table){
                $table->dropForeign('user_profiles_user_id_foreign');
        });
    }
}
