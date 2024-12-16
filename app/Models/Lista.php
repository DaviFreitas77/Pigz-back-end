<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $table = 'Lista';
    protected $primaryKey = 'id_lista';
    protected $fillable = ['fk_usuario','nome_lista'];

    public $timestamps = false;
}
