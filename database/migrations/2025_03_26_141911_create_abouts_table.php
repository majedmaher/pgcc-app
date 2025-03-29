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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');

            $table->string('sub_title');
            $table->text('sub_description');

            $table->string('first_card_image');
            $table->string('first_card_title');
            $table->text('first_card_description');

            $table->string('second_card_image');
            $table->string('second_card_title');
            $table->text('second_card_description');

            $table->string('third_card_image');
            $table->string('third_card_title');
            $table->text('third_card_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
