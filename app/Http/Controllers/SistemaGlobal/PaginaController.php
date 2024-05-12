<?php

namespace App\Http\Controllers\SistemaGlobal;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class PaginaController extends Controller
{

    public function inicio()
    {
        return view('paginas.inicio');
    }

    public function empleados()
    {
        $empleados = Empleado::get();
        $array_empleados = $empleados->toArray();
        //dd($array_empleados);

        return view('paginas.empleados')->with(['crudtable_arr' => $array_empleados]);
    }

}
