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
        Schema::create('lista', function (Blueprint $table) {
            $table->increments('id_lista');
            $table->unsignedInteger('fk_usuario');
            $table->string('nome_lista');
            $table->foreign('fk_usuario')->references('id_usuario')->on('tb_usuario')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listas');
    }
};
