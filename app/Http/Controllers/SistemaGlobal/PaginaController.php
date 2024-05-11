<?php

namespace App\Http\Controllers\SistemaGlobal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('paginas.inicio');
    }
}
