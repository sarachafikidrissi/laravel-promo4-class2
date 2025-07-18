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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('candidat_name');
            $table->string('candidat_email')->unique();
            $table->integer('candidat_age');
            $table->string('candidat_phone');
            $table->string('school');
            $table->string('gender');
            $table->integer('english_level');
            $table->string('campus');
            $table->integer('terms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};
