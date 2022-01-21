<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeladatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feladats', function (Blueprint $table) {
            $table->id();
            $table->string("nev");
            $table->string("feladat_url");
            $table->string("szoveges_ertekeles")->nullable();
            $table->integer("pontszam")->nullable();
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
        Schema::dropIfExists('feladats');
    }
}
