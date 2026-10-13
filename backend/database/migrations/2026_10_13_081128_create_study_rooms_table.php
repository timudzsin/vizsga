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
        Schema::create('study_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_type_id')->references('id')->on('room_types')->cascadeOnDelete();
            $table->string('room_name', 30);
            $table->integer('floor');
            $table->integer('total_space')->posi;
            $table->integer('occupied_space')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_rooms');
    }
};
