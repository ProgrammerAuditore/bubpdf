<?php

use App\Http\Controllers\SistemaGlobal\PaginaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PaginaController::class, 'inicio'])
->name('bubpdf.pagina.index');

Route::get('/inicio', [PaginaController::class, 'inicio'])
->name('bubpdf.pagina.inicio');

Route::get('/empleados', [PaginaController::class, 'empleados'])
->name('bubpdf.pagina.empleados');

Route::get('/empleados/{id}/contrato-empleado', [PaginaController::class, 'contrato_empleado'])
->name('bubpdf.pagina.empleados.contrato-empleado');

Route::get('/empleados/{id}/informacion-empleado', [PaginaController::class, 'informacion_empleado'])
->name('bubpdf.pagina.empleados.informacion-empleado');

Route::get('/contratos', [PaginaController::class, 'contratos'])
->name('bubpdf.pagina.contratos');

Route::get('/sucursales', [PaginaController::class, 'sucursales'])
->name('bubpdf.pagina.sucursales');
