<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function(Blueprint $table){
            $table-> increments('id');
            $table-> string('Processus_concerne');
            $table-> string('action');
            $table-> string('date_devaluation');
            $table-> string('date_decheance');
            $table-> string('etat');
            $table-> string('realise');
            $table-> string('effictue');
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
        Schema::dropIfExists('plans');
    }
}
