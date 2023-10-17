<?php

use App\Http\Controllers\ComentariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetasController;
use App\Http\Controllers\IngredientesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba/', function(){
    return view('prueba');
});

Route::resource('recetas', RecetasController::class);

Route::resource('comentarios', ComentariosController::class);
  #Aquí debes poner resource 
#'comentario' puede ser lo que yo quiera pero, también tiene que estár 
#en action="/comentario"> esto en formulario, dentro del action tiene que coincidir. 



Route::get('comentario/pdf', [ComentariosController::class, 'pdf'])->name('comentario.pdf');
#Route::post('/', [ComentariosControllerntroller::class, 'create'])

Route::get('prueba/', function () {
    return view('prueba');
});

Route::resource('ingredientes', IngredientesController::class);
//Route::get('ingredientes/pdf', [IngredientesController::class. 'pdf'])->name('ingredientes.pdf');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
