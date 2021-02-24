<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_emp');
            $table->string('tipo_identidad');
            $table->string('nie_emp');
            $table->string('nombre_tutor');
            $table->string('apellido_tutor');   
            $table->string('apellido2_tutor');  
            $table->string('pais_doc_identidad');  
            $table->string('provincia')->nullable();  
            $table->string('municipio')->nullable();  
            $table->string('estado_tutor');  
            $table->string('tlf_tutor');  
            $table->string('email');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutores');
    }
}
