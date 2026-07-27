<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->string('reference')->unique();
            $table->enum('service', ['physiotherapy', 'ames', 'aphamko', 'asca', 'amotech']);
            $table->enum('care_type', ['home', 'clinic'])->default('clinic');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('therapist')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
