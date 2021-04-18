<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('Nom')->unique();
            $table->string('Rue');
            $table->string('CodePostal', 6);
            $table->string('Ville');
            $table->string('Numéro', 10)->unique()->nullable();
            $table->string('Email')->unique()->default('NULL');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
