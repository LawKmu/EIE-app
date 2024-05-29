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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('heurD');
            $table->time('heurF');
            $table->unsignedBigInteger('responsable');
            $table->unsignedBigInteger('list_Prisence');
            $table->foreign('responsable')->references('id')->on('users');
            $table->foreign('list_Prisence')->references('id')->on('presence_lists');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
