<?php

/**
 * Por otro lado, el controlador es responsable de manejar las solicitudes entrantes del usuario
 *  y decidir qué respuesta debe ser enviada al usuario. 
 * El controlador se comunica con el modelo para obtener los datos necesarios y
 *  luego pasa estos datos a la vista para que se muestren al usuario. Además, el controlador también
 *  puede recibir datos del usuario y enviarlos al modelo para que sean almacenados en la base de datos.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Todo;

class Category extends Model
{
    use HasFactory;

    // en este método le decimos que nos devuelve todos los todos
    // una categoria puede tener muchos todos
    public function todos(){
        return $this->hasMany(Todo::class);
    }
}
