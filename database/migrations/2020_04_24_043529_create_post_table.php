<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id_post');//ID поста
            $table->string('zag_post');//Заголовок поста
            $table->string('opis_post');//Описание поста
            $table->integer('ejo');
            $table->string('img_post');//Картинки поста
            $table->integer('id_city');//Айди Города
            $table->decimal('longitude', 11, 8);
            $table->decimal('latitude',11,8);
            $table->integer('map_scale');
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
        Schema::dropIfExists('post');
    }
}
