<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Запустить миграции.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->text('body');
            $table->timestamps();
            $table->foreign('article_id')->references('id')->on('articles');
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
        Schema::dropIfExists('comments');
    }
}
