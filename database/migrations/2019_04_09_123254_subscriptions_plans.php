<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubscriptionsPlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 90);

            $table->integer('subscription_type_id')->unsigned();
            $table->foreign('subscription_type_id')->references('id')->on('subscriptions_types');
            $table->integer('collection_id')->unsigned(); # ref tb collections -> modalidade de pagamentos: mensal/trim/sem/anual
            $table->foreign('collection_id')->references('id')->on('collections');
            
            $table->float('price', 8,2);
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
        //
    }
}
