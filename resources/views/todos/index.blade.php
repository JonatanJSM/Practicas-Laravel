@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">titulo de la tesis</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Registrar tesis</div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
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