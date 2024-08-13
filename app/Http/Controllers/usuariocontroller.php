<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // Corrige el espacio de nombres aquí

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    /**
     * Mostrar usuarios cuyo nombre empieza con 'T'.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function filterByName()
    {
        $usuarios = Usuario::where('nombre', 'like', 'T%')->get();
        return response()->json($usuarios);
    }
}
