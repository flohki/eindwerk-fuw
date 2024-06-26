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
        Schema::create('kaarten', function (Blueprint $table) {
            $table->id();
            $table->string('naam_speler');
            $table->integer('gele_kaart');
            $table->integer('twee_geel');
            $table->integer('rode_kaart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kaarten');
    }
};