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
        Schema::create(' apprenant', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 11);
            $table->string('prenom', 15);
            $table->string("matricule", 20)->unique();
            $table->string("telephone", 20)->unique();
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
        Schema::dropIfExists(' apprenant');
    }
};
