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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique(); // Número entero único
            $table->integer('customer_id'); // ID del cliente como clave foránea            
            $table->date('date'); // Fecha
            $table->integer('pay_mode_id'); // ID del modo de pago como clave foránea           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_invoices');
    }
};
