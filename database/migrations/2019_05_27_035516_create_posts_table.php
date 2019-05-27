<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('subscription_type_id')->unsigned();
            $table->foreign('subscription_type_id')->references('id')->on('subscription_types');

            $table->integer('publisher_id')->unsigned();
            $table->foreign('publisher_id')->references('id')->on('publishers');

            $table->integer('report_type_id')->unsigned();
            $table->foreign('report_type_id')->references('id')->on('report_types');

            $table->string('title', 80);
            $table->string('summary', 80);
            $table->string('text');
            $table->string('image');
            
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
        Schema::dropIfExists('posts');
    }
}
