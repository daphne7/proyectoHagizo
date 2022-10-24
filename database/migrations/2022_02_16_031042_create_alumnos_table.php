<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{

    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();


            $table->string('nombres',60)->nullable();
            $table->string('ap_paterno',30)->nullable();
            $table->string('ap_materno',30)->nullable();
            $table->string('ci',10)->nullable();
            $table->string('direccion',100)->nullable();
          

            $table->string('paise',150)->nullable();
            $table->string('departamento',150)->nullable();
            $table->string('provincia',150)->nullable();
            $table->string('municipio',150)->nullable();

            $table->string('num_cel',10)->nullable();
            $table->string('email')     ->nullable();
            $table->string('fecha_nac',250)->nullable(); //aqui
            $table->string('genero')      ->nullable();
            $table->string('estado_civil',30)->nullable();
            $table->string('nom_tutor',100)->nullable();

            $table->string('num_cel_tutor',10)->nullable();
            $table->string('llam_urg',100)->nullable();
            $table->string('num_cel_urg',10)->nullable();
            $table->string('iglesia',80)->nullable();
            $table->string('loc_igl',150)->nullable();
            $table->string('pastor',100)->nullable();

            $table->string('fecha_acept',250)->nullable();
            $table->string('preg_baut',30)->nullable();
            $table->string('fecha_baut',250)->nullable();
            $table->text('cargo_est',250)->nullable();
            $table->text('menor_edad',100)->nullable();

            //Información Académica:
            $table->string('nivel_acad')->nullable();
             $table->string('nivel_acaddos',100)->nullable();
            //MODALIDAD DE PAGO
            $table->string('mod_pago')->nullable();

            //TESTIMONIO PERSONAL
            $table->string('afir_conf')->nullable();  //aqui automatico
            $table->text('testimonio_conv')->nullable();
            $table->text('testimonio_serv')->nullable();
            $table->text('razon_est')->nullable();
            $table->string('fecha_test')->nullable();

            $table->string('foto_estudiante',50)->nullable();

            $table->text('observ')->nullable();

            $table->foreignId('curso_id')
                ->nullable()
                ->constrained('cursos')
                ->onDelete('set null');

            $table->foreignId('profesor _id')
                ->nullable()
                ->constrained('profesores')
                ->onDelete('set null');

            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
