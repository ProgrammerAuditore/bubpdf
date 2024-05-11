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

