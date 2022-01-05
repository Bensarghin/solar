<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('tele')->unique;
            $table->string('code_postal')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('tele_parent')->nullable();
            $table->string('tele_fixe')->nullable();
            $table->string('email')->unique;
            $table->text('adresse');
            $table->string('ville_resident');
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
        Schema::dropIfExists('contacts');
    }
}
