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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('country');
            $table->integer('age');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @retutn void
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
