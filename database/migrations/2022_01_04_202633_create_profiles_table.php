<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
           $table->foreignId('contact_id')->references('id')->on('contacts')->onDelete('cascade');
           $table->foreignId('scolaire_id')->references('id')->on('scolaires')->onDelete('cascade');
           $table->BigInteger('user_id')->unsigned()->nullable();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
