<?php

namespace App\Http\Controllers\SistemaGlobal;

use App\Http\Controllers\Controller;
use App\Models\ActividadSucursal;
use App\Models\Empleado;
use App\Models\InformacionDeEmpleado;
use App\Models\Sucursal;
use Illuminate\Http\Request;

class PaginaController extends Controller
{

    public function inicio()
    {
        return view('paginas.inicio');
    }

    public function panel()
    {
        return view('paginas.panel');
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
        $sucursales = Sucursal::get();
        $array_sucursales = $sucursales->toArray();
        //dd($array_sucursales);

        return view('paginas.sucursales')->with(['crudtable_arr' => $array_sucursales]);
    }

    public function actividad_sucursal($id)
    {
        $sucursal = Sucursal::findOrFail($id);
        $actividades = ActividadSucursal::where('sucursal_id', $id)->get();
        //dd($sucursal);

        if(!$sucursal || !$actividades)
        {
            return redirect()->back();
        }

        return view('subpaginas.actividad-sucursal')->with([
            'sucursal' => (object) $sucursal->toArray(),
            'crudTable_arr' => $actividades->toArray()
        ]);
    }
}
