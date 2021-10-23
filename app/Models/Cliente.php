<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    /* Nombre de la llave primaria personalizada */
    protected $primaryKey = ('id_cliente');

    /* Nombre de la tabla personalizado */
    protected $table =  ('client');
}
