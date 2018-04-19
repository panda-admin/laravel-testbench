<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('content_id');
            $table->string('locale');
            $table->string('title');
            $table->text('content');
            $table->string('cover');

            $table->foreign('content_id')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_translations');
    }
}
