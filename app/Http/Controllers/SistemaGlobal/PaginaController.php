<?php

namespace App\Http\Controllers\SistemaGlobal;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use App\Models\InformacionDeEmpleado;
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

    public function contrato_empleado($id)
    {
        $info_empleado = InformacionDeEmpleado::findOrFail($id);
        $empleado = $info_empleado->empleado ?? null;
        //dd($info_empleado, $empleado);

        // Si no existe información sobre el empleado
        // se redirecciona hacia atras
        if(!$info_empleado || !$empleado)
        {
            return redirect()->back();
        }

        return view('subpaginas.contrato-empleado')->with([
            'info_empleado' => (object) $info_empleado->toArray(),
            'empleado' => (object) $empleado->toArray(),
        ]);
    }

    public function informacion_empleado($id)
    {
        $info_empleado = InformacionDeEmpleado::findOrFail($id);
        $empleado = $info_empleado->empleado ?? null;
        //dd($info_empleado, $empleado);

        // Si no existe información sobre el empleado
        // se redirecciona hacia atras
        if(!$info_empleado || !$empleado)
        {
            return redirect()->back();
        }

        return view('subpaginas.informacion-empleado')->with([
            'info_empleado' => (object) $info_empleado->toArray(),
            'empleado' => (object) $empleado->toArray(),
        ]);
    }

    public function contratos()
    {
        return view('paginas.contratos')->with([]);
    }

    public function sucursales()
    {
        return view('paginas.sucursales')->with([]);
    }

}
