<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompartilharLista extends Model
{
    protected $table = 'tb_compartilhar_lista';

    protected $fillable = ['fk_send_usuario','fk_lista','fk_receiver_usuario'];

    public $timestamps = false;
}
