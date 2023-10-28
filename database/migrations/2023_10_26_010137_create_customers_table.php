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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->char('document_number', 15)->unique(); // Número de documento único
            $table->char('first_name', 50); // Primer nombre
            $table->char('last_name', 50); // Apellido
            $table->char('address', 80)->nullable(); // Dirección (puede ser nulo)
            $table->date('birthday')->nullable(); // Fecha de nacimiento (puede ser nulo)
            $table->char('phone_number', 16)->nullable(); // Número de teléfono (puede ser nulo)
            $table->char('email', 100)->nullable(); // Dirección de correo electrónico (puede ser nulo)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
