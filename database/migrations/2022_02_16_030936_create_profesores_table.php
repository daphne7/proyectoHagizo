<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesoresTable extends Migration
{

    
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->string('nombres',50)->nullable();
            $table->string('ap_paterno',30)->nullable();
            $table->string('ap_materno',30)->nullable();
            $table->string('direccion',70)->nullable();
            $table->string('ci',10)->nullable();
            $table->string('paise',30)->nullable();
            $table->string('departamento',30)->nullable();
            $table->string('provincia',30)->nullable();
             $table->string('municipio',30)->nullable();
            $table->string('num_cel',10)->nullable();
            $table->string('email')->nullable();
            $table->string('fecha_nac',10)->nullable();
            $table->string('genero')->nullable();
            $table->string('estado_civil',30)->nullable();
            $table->string('profesion',150)->nullable();
            $table->string('rut',50)->nullable();
            

            $table->string('foto_profesor',50)->nullable();

            
            /*Creando relacion version 8 de Laravel */
            $table->foreignId('curso_id')
                ->nullable()
                ->constrained('cursos')
                ->onDelete('set null');
          
            

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('profesores');
    }
}
