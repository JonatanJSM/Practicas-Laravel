@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="{{route('todos')}}" method="POST">
            @csrf 
                    <!--
                    las dobles llaves es para inyectar codifo php
                    se envia a todos y no a tareas por el name('todos')

                    -->
            <div class="mb-3">
                <label for="title" class="form-label">Título de la tarea</label>
                <input type="text" class="form-control mb-2" name="title" id="exampleFormControlInput1" placeholder="Comprar la cena">
                <div id="emailHelp" class="form-text">Registrar tesis</div>
            </div>
              <input type="submit" value="Crear tarea" class="btn btn-primary my-2" />
        </form>
    </div>
@endsection

<!-- ORM(object relational mapper)
    elocuent - relacionar las bases de datos con el modelo
-->

<!--
    Para crear un modelo es 
    php artisan make:model nombre -m,

-->