<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->string('address', 200);
            $table->string('phone', 15);
            $table->string('email', 100)->unique();
            $table->string('dni', 8)->unique();
            $table->date('fecha_nacimiento');
            $table->string('username', 50);
            $table->string('avatar', 200);
            $table->string('password', 100);
            $table->timestamps(); 
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
