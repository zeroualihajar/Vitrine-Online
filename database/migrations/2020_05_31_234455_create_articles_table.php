<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('categorie_id');
            $table->string('codeArt');
            $table->string('nomArt');
            $table->integer('pu');
            $table->integer('quantite');
            $table->longText('description');
            $table->integer('joursLivraison');
            $table->float('prixLivraison');
            $table->integer('garantie');
            $table->integer('delai');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
