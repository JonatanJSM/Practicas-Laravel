<?php
// para crear modelo es 
//php artisan make:model nombre -m 

//phph artisan make:controller nombre

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * hay que unir la vista con el modelo
     * esto se hace con un controlador
     */
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps(); // record en que se creo la tabla
        });
    }

    /**
     * Reverse the migrations.
     * php artisan migrate para ejecutar las migraciones
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
