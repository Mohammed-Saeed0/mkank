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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('phone')->nullable(); // Added
            $table->string('primary_image'); // Added
            $table->enum('purpose', ['sale', 'rent']);
            $table->enum('type', ['residential', 'commercial']);
            $table->decimal('price', 15, 2);
            $table->text('description')->nullable();
            $table->enum('status', ['ready', 'under', 'future']);
            $table->enum('city', ['oboor', 'badr', 'capital', 'zayed']);
            $table->integer('beds')->nullable();
            $table->integer('baths')->nullable();
            $table->decimal('geo', 8, 2)->nullable();
            $table->string('video')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
