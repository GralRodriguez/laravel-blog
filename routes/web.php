<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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

Route::get('/', HomeController::class);

// Tutorial Laravel 9 de YouTube con CodersFree
// Pruebas con routes en javascript
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});
/*
Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = "") {
    $mensaje = null;

    if ($categoria != "") {
        $mensaje = "Bienvenido al curso: " . $curso . " de la categoria: " . $categoria;
    }else {
        "Bienvenido al curso: " . $curso;
    }

    return $mensaje;
});
*/
