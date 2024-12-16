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
        Schema::create('tb_compartilhar_lista', function (Blueprint $table) {
            $table->increments('id_compartilhar');
            $table->unsignedInteger('fk_lista');
            $table->unsignedInteger('fk_send_usuario');
            $table->unsignedInteger('fk_receiver_usuario');

            $table->foreign('fk_lista')->references('id_lista')->on('lista')->onDelete('cascade');
            $table->foreign('fk_send_usuario')->references('id_usuario')->on('tb_usuario')->onDelete('cascade');;
            $table->foreign('fk_receiver_usuario')->references('id_usuario')->on('tb_usuario')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compartilhar_listas');
    }
};
