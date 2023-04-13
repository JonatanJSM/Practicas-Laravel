<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * php artisan make:migration add_category_id_todo_table --table=todos
     */

     //hace una relacion entre catecorias
     //un todo tiene solo una categoria y una categorias tiene muchos todos
    public function up(): void
    {   //añade esta comulna a la tabla
        Schema::table('todos', function (Blueprint $table) {
            $table->bigInteger('category_id')->unsigned();
            $table 
                    ->foreign('category_id')
                    ->references('id') // referencia a id 
                    ->on('categories') // de esta tabla
                    ->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('todos', function (Blueprint $table) {
            //
        });
    }
};
