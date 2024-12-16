<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'tb_usuario';
    protected $primaryKey = 'id_usuario';
    protected $fillable =['nome_usuario','senha_usuario','cargo'];

    public $timestamps = false;
}
