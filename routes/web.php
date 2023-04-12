<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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

//route es un objeto   los  :: son como el . en Java

// '/' es la direccion raiz
Route::get('/', function () {
    return view('welcome');
});

//hace referencia al app que creé con hola mundo
Route::get('/tareas', function () {
    return view('todos.index');
})->name('todos');;


Route::get('/hola', function () {
    return 'hola a todossss';
});

                                                //el store es el que se llama
Route::post('/tareas', [TodosController::class,'store'])->name('todos');
                                                    // el name es para que con este nombre se haga referencia
        // si cambia el /todos por fuera se puede llamar con todos