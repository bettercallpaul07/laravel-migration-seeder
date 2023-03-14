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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company", 50); //stringa
            $table->string("departure_station", 50); //stringa
            $table->string("arrival_station", 50); //stringa
            $table->dateTime("departure_time"); //datetime/timestamp
            $table->dateTime("arrival_time"); //datetime/timestamp
            $table->string("code", 12); //stringa
            $table->unsignedTinyInteger("carriages"); //tinyInt unsigned
            $table->boolean("on_time")->default(true); //bool -> tinyInt
            $table->boolean("deleted")->default(false); //bool -> tinyInt
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
        Schema::dropIfExists('trains');
    }
};
