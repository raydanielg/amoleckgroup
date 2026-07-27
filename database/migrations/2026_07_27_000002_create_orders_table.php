<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained('clients')->nullOnDelete();
            $table->string('reference')->unique();
            $table->enum('division', ['ames', 'aphamko', 'asca', 'amotech']);
            $table->text('items');
            $table->decimal('total', 12, 2);
            $table->string('delivery_to')->nullable();
            $table->dateTime('eta')->nullable();
            $table->enum('status', ['processing', 'transit', 'delivered', 'delayed', 'cancelled'])->default('processing');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
