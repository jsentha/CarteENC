<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarteEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carte_etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomEtudiant');
            $table->date('dateEntreeENC');
            $table->integer('numeroTelephone');
            $table->string('email')->unique();
            $table->string('section');
            $table->string('unFichier');
            $table->timestamps();

            // Etape 2 migration
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carte_etudiants');
    }
}
