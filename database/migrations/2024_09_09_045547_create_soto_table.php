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
        Schema::create('soto', function (Blueprint $table) {
                $table->id();
                $table->string('menu');
                $table->string('older_items')->nullable();
                $table->string('LevelPedas')->nullable();
                $table->string('Riviews')->nullable();
                $table->string('payment');
                $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soto');
    }
};
