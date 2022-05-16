<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Запустить миграции.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('twitter');
            $table->timestamps();
        });
    }
    /**
     * Откат миграций.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
