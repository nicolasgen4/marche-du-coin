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
        Schema::create('ventes', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('titre')->unique();
            $table->string('etiquettes');
            $table->string('vendeur');
            $table->string('debut_vente');
            $table->string('fin_vente')->nullable();
            $table->string('localisation');
            $table->string('email');
            $table->string('telephone')->nullable();
            $table->string('site_web')->nullable();
            $table->longText('description');
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
        Schema::dropIfExists('ventes');
    }
};
