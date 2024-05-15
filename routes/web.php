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

Route::prefix('/empleados')->name('bubpdf.pagina.empleados.')->group(function () {
    Route::get('/', [PaginaController::class, 'empleados'])->name('index');
    Route::get('/{id}/contrato-empleado', [PaginaController::class, 'contrato_empleado'])->name('contrato-empleado');
    Route::get('/{id}/informacion-empleado', [PaginaController::class, 'informacion_empleado'])->name('informacion-empleado');
});

Route::get('/contratos', [PaginaController::class, 'contratos'])
->name('bubpdf.pagina.contratos');

Route::get('/sucursales', [PaginaController::class, 'sucursales'])
->name('bubpdf.pagina.sucursales');
