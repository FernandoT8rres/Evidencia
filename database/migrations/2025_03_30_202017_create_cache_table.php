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
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->text('value');
            $table->integer('expiration');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cache');
    }
    
};
