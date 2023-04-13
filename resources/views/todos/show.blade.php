@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="{{route('todos-update', ['id'=> $todo->id])}}" method="POST">
            @method('PATCH')
            @csrf 

            @if(session('success'))
                <h6 class="alert alert-success">{{session('success')}}</h6>
            @endif

            @error('title')
            <h6 class="alert alert-danger">{{$message}}</h6>
            @enderror

            <div class="mb-3">
                <label for="title" class="form-label">Título de la tarea</label>
                <input type="text" class="form-control mb-2" name="title" id="exampleFormControlInput1" value="{{$todo->title}}">
                <div id="emailHelp" class="form-text">actualizar tesis</div>
            </div>
              <input type="submit" value="Crear tarea" class="btn btn-primary my-2" />
        </form>
        
    </div>
@endsection

