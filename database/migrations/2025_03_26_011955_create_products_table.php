<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('IdProduct');
            $table->string('Name')->nullable(false);  // Esto indica que es obligatorio.
            $table->string('cliente');
            $table->text('Descripcion')->nullable();
            $table->decimal('Price', 10, 2);
            $table->integer('Stock')->default(0);
            $table->string('Image')->nullable();
            $table->timestamps();
        });
        Schema::table('products', function (Blueprint $table) {
            $table->text('descripcion')->after('cliente');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('Price')->nullable()->change();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('descripcion');
        });
    }
};
