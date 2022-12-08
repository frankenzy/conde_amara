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
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('porteur_projet_id');
            $table->foreignId('type_projet_id');
            $table->string('nom');
            $table->string('van');
            $table->string('tri');
            $table->date("debut_projet");
            $table->date("fin_projet");
            $table->string("budget");
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
        Schema::dropIfExists('projets');
    }
};
