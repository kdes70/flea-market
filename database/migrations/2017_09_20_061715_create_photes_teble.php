<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotesTeble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('path');
            $table->string('thumbnail_path');
            $table->integer('model_id')->commit('ID поста');
            $table->boolean('confirm')->default(false)->commit('Подтверждение модератором');
            $table->boolean('status')->default(false);
            $table->json('options')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();

            //$table->foreign('model_id')->references('id')->on('ads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
