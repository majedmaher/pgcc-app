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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->string('title');
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();

            $table->text('main_title');
            $table->text('description_main');
            $table->string('profile');

            $table->text('description_footer');

            $table->string('whatsapp');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('telegram');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
