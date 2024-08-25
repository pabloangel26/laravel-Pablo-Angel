<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // ID auto-incremental
            $table->string('nombre'); // Nombre del contacto
            $table->string('asunto'); // Asunto del mensaje
            $table->string('email'); // Correo electrónico del contacto
            $table->text('texto'); // Mensaje del contacto
            $table->timestamps(); // Timestamps para seguimiento de creación y actualización
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts'); // Elimina la tabla si se revierte la migración
    }
}
