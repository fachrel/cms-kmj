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
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('instagram')->default('https://instagram.com/');
            $table->string('facebook')->default('https://facebook.com/');
            $table->string('tiktok')->default('https://tiktok.com/');
            $table->string('email')->default('example@email.com');
            $table->string('phone')->default('08100000000');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socials');
    }
};
