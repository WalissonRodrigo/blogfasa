<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('conteudo');
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('posts', function(Blueprint $table){
            $table->integer('user_id')->unsigned()->nullable(true)->change();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
