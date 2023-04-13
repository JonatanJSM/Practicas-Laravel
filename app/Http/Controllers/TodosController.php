<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;


class TodosController extends Controller
{
    /**
     * index para mostrar todos los todos
     * store para guadrar todo
     * update para actualizar un todo
     * destroy para eliminar un todo
     * edit para mostrar el formalrio de edición
     */

     public function store(Request $request){

      $request->validate([
          'title' => 'required|min:3',
      ]);

         $todo = new Todo;
        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('todos')->with('success', 'Todo created successfully');
     }

     public function index()
     {
         $todos = Todo::all();
         return view('todos.index', ['todos' => $todos]);
         // el segundo dato son los datos que se le pasan a la vista
     }

     public function show($id)
     {                     // este parámetro es lo que está dentro de las llaves /tareas/{id}
         $todo = Todo::find($id);
         return view('todos.show', ['todo' => $todo]);
     }

     public function update(Request $request, $id)
     {
        $todo = Todo::find($id);
        $todo -> title = $request->title;
        $todo->save();
        //dd($todo);
        // el objeto Request son valores que están en los elementos del formulario

        //return view('todos.index', ['success' => "tarea actualizada"]);
        return redirect()->route('todos')->with('success','Tareas actualida');
    }

     public function destroy($id)
     {
         $todo = Todo::find($id);
         $todo->delete();
         return redirect()->route('todos')->with('success','TareaEliminado');
     }

}
