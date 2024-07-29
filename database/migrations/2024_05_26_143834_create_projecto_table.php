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
        Schema::create('projecto', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('referencia');
            $table->string('namePIU');
            $table->string('descricao');
            $table->string('estado');
            $table->string('preparadoPor');
            $table->string('aprovadoPor');
            $table->string('contratoSubprojecto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projecto');
    }
};
