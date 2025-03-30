<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::dropIfExists('cache');
    }
    
    public function down()
    {
        // Si quieres restaurar la tabla en el futuro, puedes usar el siguiente código:
        Schema::create('cache', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('descripcion');
            $table->timestamps();
        });
    }
    
};
