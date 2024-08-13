<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NController extends Controller
{
    public function Notas(){
        return view('notas');
    }
}
