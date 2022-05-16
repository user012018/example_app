<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Запустить миграции.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->unsigned();
            $table->string('title');
            $table->timestamps();
            $table->foreign('author_id')->references('id')->on('people');
        });
    }
    /**
     * Откат миграций.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
