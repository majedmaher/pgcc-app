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
        Schema::create('about_statics', function (Blueprint $table) {
            $table->id();

            $table->string('image');
            $table->tinyInteger('number');
            $table->string('description');
            $table->char('after_number', 3)->nullable();
            $table->char('before_number', 3)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_statics');
    }
};
