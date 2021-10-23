<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    /* Nombre personalizado de la llave primaria */
    protected $primaryKey = 'id_producto';

    /* Nombre personalizado de la tabla */
    protected $table = 'product';
}
