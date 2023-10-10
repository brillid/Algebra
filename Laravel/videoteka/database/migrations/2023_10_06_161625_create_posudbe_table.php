<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posudbe', function (Blueprint $table) {
            $table->id();
            //$table->foreignId("clans.id")->constrained();
            //$table->foreignId("films.id")->constrained();
            $table->unsignedBigInteger("id_clan");
            $table->unsignedBigInteger("id_film");
            $table->date("datum_posudbe");
            $table->date("datum_vracanja")->nullable();
            $table->timestamps();

            $table->foreign("id_clan")->references("id")->on("clans")->onDelete("restrict")->onUpdate("cascade");
            $table->foreign("id_film")->references("id")->on("films")->onDelete("restrict")->onUpdate("cascade");

            //$table->unique(["id_clan", "id_film"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posudbe');
    }
};
