<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoryController;

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

//cuando escribo /tareas se ejecuta index
Route::get('/tareas', [TodosController::class,'index'])->name('todos');


                                                //el store es el que se llama
Route::post('/tareas', [TodosController::class,'store'])->name('todos');
                                                    // el name es para que con este nombre se haga referencia
        // si cambia el /todos por fuera se puede llamar con todos


Route::get('/tareas/{id}', [TodosController::class,'show'])->name('todos-show');

Route::patch('/tareas/{id}', [TodosController::class,'update'])->name('todos-update');
Route::get('/todos/{id}', [TodosController::class , 'show'])->name('todos-edit');

Route::delete('/tareas/{id}', [TodosController::class,'destroy'])->name('todos-destroy');

Route::resource('categories',CategoryController::class);
// php artisan make:controller CategorisController --resource
// para crear rápido los métdosos de controlador