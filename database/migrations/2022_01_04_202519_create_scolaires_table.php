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
            $table->string('note_regional');
            $table->string('note_total')->nullable();
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
