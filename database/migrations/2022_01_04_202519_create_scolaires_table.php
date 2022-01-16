<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScolairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scolaires', function (Blueprint $table) {
            $table->id();
            $table->string('pack');
            $table->string('bac_niveau');
            $table->string('code_massar')->nullable();
            $table->string('region');
            $table->string('filier');
            $table->string('nom_etab_actuel');
            $table->string('ville_etab_actuel');
            $table->float('note_regional');
            $table->float('note_total')->nullable();
<<<<<<< HEAD
            // $table->string('ville_institude');
            // $table->string('institude');
            // $table->float('Examen_Regional');
            // $table->float('Note_semestre')->nullable();
            // $table->float('Examen_National');
            // $table->float('Note_bac');
=======
            $table->float('Note_semestre')->nullable();
            $table->float('Examen_National')->nullable();
>>>>>>> admin
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
        Schema::dropIfExists('scolaires');
    }
}
