<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('categories', function (Blueprint $table) {
            $table->increments("id_categorie");
            $table->string('nom_categorie')->nullable();
            $table->string('photo_categorie')->nullable();
            $table->timestamps();

        });
      

        Schema::create('reservation', function (Blueprint $table) {
            $table->increments("id_reservation")->nullable();
            $table->string('nom_reservation')->nullable();
            $table->string('telephone_reservation')->nullable();
            $table->string('genre_reservation')->nullable();
            $table->string('heure_reservation')->nullable();
            $table->string('date_reservation')->nullable();
            $table->string('nombre_de_personnes')->nullable();
            $table->string('message')->nullable();
            $table->timestamps();
            $table->unsignedInteger("id_categorie")->nullable(); //Unique key
            $table->foreign('id_categorie')
            ->references('id_categorie')
            ->on('categories')
            ->onDelete('cascade');
            
        });

      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
