<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborateursTable extends Migration
{
    public function up()
    {
        Schema::create('collaborateurs', function (Blueprint $table) {
            $table->id();
            $table->string('civilité');
            $table->string('Nom');
            $table->string('Prénom');
            $table->string('Rue');
            $table->string('CodePostal', 6);
            $table->string('Ville');
            $table->string('Numéro', 10)->unique()->nullable();
            $table->string('Email')->unique();
            $table->string('Entreprise');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('collaborateurs');
    }
}
