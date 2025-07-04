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
        Schema::create('apuestas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_bank')->constrained('banks');
            $table->string('evento',100);
            $table->string('descripcion',300);
            $table->string('tipo_apuesta',20);
            $table->decimal('monto_apuesta',10,2);
            $table->decimal('cuota',10,2);
            $table->string('categoria',20);
            $table->string('estado',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apuesta_tabla');
    }
};
