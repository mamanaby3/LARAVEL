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
        Schema::table(' matiere', function (Blueprint $table) {
            $table->unsignedBigInteger('ue_id');
            $table->foreign('ue_id')->references('id')->on(' unite_enseignement');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(' matiere', function (Blueprint $table) {
            // Schema::enableForeignKeyConstraints();
            $table->dropForeign(['ue_id']);
        });
    }
};
