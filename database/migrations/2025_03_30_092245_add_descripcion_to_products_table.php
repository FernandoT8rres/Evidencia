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
    Schema::table('products', function (Blueprint $table) {
        $table->text('descripcion')->after('cliente');  // Agregar la columna descripcion
    });
}

public function down()
{
    Schema::table('products', function (Blueprint $table) {
        $table->dropColumn('descripcion');  // Eliminar la columna descripcion si se revierte la migración
    });
}

};
