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
        Schema::create('tb_tarefa', function (Blueprint $table) {
            $table->increments('id_tarefa');
            $table->unsignedInteger('fk_lista');
            $table->string('nome_tarefa');
            $table->boolean('status')->default(false);
            $table->timestamps();

            $table->foreign('fk_lista')->references('id_lista')->on('lista')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
