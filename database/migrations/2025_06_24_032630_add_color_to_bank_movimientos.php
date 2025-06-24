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
        Schema::table('bank_movimientos', function (Blueprint $table) {
            $table->string('color',20);
            $table->decimal('cantidad',10,2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bank_movimientos', function (Blueprint $table) {
            $table->dropColumn('color');
            $table->dropColumn('cantidad');
        });
    }
};
