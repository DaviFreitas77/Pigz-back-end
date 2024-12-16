<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarefas extends Model
{
    protected $table = 'tb_tarefa';
    protected $primaryKey = 'id_tarefa';
    protected $fillable = ['fk_lista','nome_tarefa','status_tarefa'];

    
}
