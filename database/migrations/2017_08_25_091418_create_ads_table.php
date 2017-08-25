<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->index();
            $table->tinyInteger('type_id')->unsigned()->index();
            $table->integer('city_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->index();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('text');
            $table->decimal('price', 10, 2);
            $table->string('phone', 20);
            $table->boolean('confirm')->default(false)->commit('Подтверждение модератором');
            $table->boolean('status')->default(false);
            $table->json('options')->nullable();
            $table->dateTime('deleted_at')->nullable();
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
        Schema::dropIfExists('ads', function(Blueprint $table){
            $table->dropForeign('ads_category_id_foreign');
//            $table->dropColumn('category_id');
        });
    }
}
