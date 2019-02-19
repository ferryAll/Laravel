<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('posts_posts', function (Blueprint $table) {
        //     $table->bigInteger('post_id1',true)->unsigned();

        //     $table->bigInteger('post_id2',true)->unsigned();

        //     $table->foreign('post_id1')->references('id')->on('posts');
        //     $table->foreign('post_id2')->references('id')->on('posts');
        // });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_posts');
    }
}
