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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 50);
            $table->string('Stazione di partenza', 100);
            $table->string('Stazione di arrivo', 100);
            $table->string('Orario di partenza');
            $table->string('Orario di arrivo');
            $table->string('Codice Treno');
            $table->smallInteger('Numero Carrozze');
            $table->boolean('In orario');
            $table->boolean('Cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
