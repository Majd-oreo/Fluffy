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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');  
            $table->foreignId('appointment_id')->constrained('appointments')->onDelete('cascade');  
            $table->decimal('amount', 8, 2);  
            $table->enum('payment_method', ['Credit Card', 'Debit Card', 'PayPal', 'Cash', 'Online'])->default('Online'); 
            $table->enum('status', ['Pending', 'Completed', 'Failed', 'Refunded'])->default('Pending');  
            $table->string('transaction_id')->nullable();  
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
