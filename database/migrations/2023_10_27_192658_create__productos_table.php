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
        Schema::create('_productos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 80)->nullable();
            $table->int('price')->nullable();
            $table->int('stock')->nullable();
            $table->int('category_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_productos');
    }
};
