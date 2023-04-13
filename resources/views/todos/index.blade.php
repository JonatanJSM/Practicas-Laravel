@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="{{route('todos')}}" method="POST">
            @csrf 
                    <!--
                    las dobles llaves es para inyectar codifo php
                    se envia a todos y no a tareas por el name('todos')

                    -->
            @if(session('success'))
                <h6 class="alert alert-success">{{session('success')}}</h6>
            @endif

            <!--si hay un error en el título quiero ques emuestre
            // message siempre está en las vistas
            // tiene el valor del error
            -->
            @error('title')
            <h6 class="alert alert-danger">{{$message}}</h6>
            @enderror

            <div class="mb-3">
                <label for="title" class="form-label">Título de la tarea</label>
                <input type="text" class="form-control mb-2" name="title" id="exampleFormControlInput1" placeholder="Comprar la cena">
                <div id="emailHelp" class="form-text">Registrar tesis</div>
            </div>

            <label for="category_id" class="form-label">Categoria de la tarea</label>
            <select name="category_id" class="form-select">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

              <input type="submit" value="Crear tarea" class="btn btn-primary my-2" />
        </form>

        <div>
            @foreach ($todos as $todo)
                <div class="row py-1">
                    <div class="col-md-9 d-flex align-items-center">
                        <!--hipervinculo para que vaya a otra vista y edite el todo actual-->
                        <a href="{{ route('todos-show', ['id' => $todo->id]) }}">{{ $todo->title }}</a>
                    </div>

                    <div class="col-md-2 d-flex justify-content-end">
                        <form action="{{ route('todos-destroy', [$todo->id]) }}" method="POST">
                            @method('DELETE') <!--es el method para que no sea post-->
                            @csrf
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection

<!-- ORM(object relational mapper)
    elocuent - relacionar las bases de datos con el modelo
-->

<!--
    Para crear un modelo es 
    php artisan make:model nombre -m,

-->