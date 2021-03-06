<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandePersonnalisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_personnalises', function (Blueprint $table) {
            $table->id('idComPerso');
            $table->integer('prix');
            $table->integer('quantite');
            $table->date('dateComPerso');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('user_id')->on('clients');
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
        Schema::dropIfExists('commande_personnalises');
    }
}
