<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios'; // Asegúrate de que el nombre de la tabla sea correcto

    protected $fillable = ['nombre', 'apellido']; // Campos que pueden ser llenados
}
