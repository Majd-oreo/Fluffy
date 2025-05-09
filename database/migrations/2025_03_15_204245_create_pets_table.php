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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->enum('type', ['Cat', 'Dog', 'Bird', 'Rabbit']);
            $table->string('breed')->nullable();
            $table->integer('age')->nullable();
            $table->float('weight')->nullable();
            $table->text('medical_history')->nullable();
            $table->string('image')->nullable(); 
            $table->softDeletes(); 



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
