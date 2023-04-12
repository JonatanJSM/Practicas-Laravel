<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/app', function () {
    return view('todos.index');
});


Route::get('/hola', function () {
    return 'hola a todossss';
});