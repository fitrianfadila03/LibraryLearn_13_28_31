<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Kolom nama
            $table->string('email')->unique(); // Kolom email
            $table->string('password'); // Kolom password
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('registers');
    }
};
