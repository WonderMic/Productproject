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
        Schema::create('postarticles', function (Blueprint $table) {
            $table->id();
            $table->string('Titre');
            $table->string('Type');
            $table->string('Categorie');
            $table->string('Etiquette');
            $table->string('Image');
            $table->mediumtext('Texte');
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
        Schema::dropIfExists('postarticles');
    }
};
