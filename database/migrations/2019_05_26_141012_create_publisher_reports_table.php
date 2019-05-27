<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublisherReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publisher_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('report_type_id')->unsigned();
            $table->foreign('report_type_id')->references('id')->on('report_types');

            $table->integer('publisher_id')->unsigned();
            $table->foreign('publisher_id')->references('id')->on('publishers');
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
        Schema::dropIfExists('publisher_reports');
    }
}
