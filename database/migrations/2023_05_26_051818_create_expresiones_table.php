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
        Schema::create('expresiones', function (Blueprint $table) {
            $table->id();
            $table->string('expresion');
            $table->string('descripcion');
            $table->bigInteger('user_id')->unsigned();
            $table->string('slug')->unique();
            $table->foreign('user_id')->references('id')->on('users'); // Relación con la tabla users
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expresiones');
    }
};
