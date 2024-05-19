<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            // Utilisation de la méthode references pour deux clés étrangères
            $table->foreignId('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('module_id')->references('id')->on('modules')->onDelete('cascade');
            $table->decimal('grade', 5, 2);
            $table->date('date_recorded');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};