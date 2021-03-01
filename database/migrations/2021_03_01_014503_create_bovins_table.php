<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBovinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bovins', function (Blueprint $table) {
            $table->id('idBovin');
            $table->string('codeBovin',255);
            $table->string('nom',255);
            $table->string('photo',255);
            $table->date('dateNaiss');
            $table->string('etatSante');
            $table->string('geniteur',255);
            $table->string('genitrice',255);
            $table->string('etat',255);
            $table->string('situation',255);
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
        Schema::dropIfExists('bovins');
    }
}