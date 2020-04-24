<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->bigIncrements('id_city');//Id города
            $table->string('name_city');//Название города
            $table->string('opis_city')->nullbale();//Описание города
            $table->string('img_city')->nullbale();//Картинка города
            // $table->integer('ejo')->nullbale();// Еда Жилье Отдых (1-еда 2-жилье 3-отдых)
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
        Schema::dropIfExists('city');
    }
}
