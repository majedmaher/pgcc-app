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
        Schema::table('partner_items', function (Blueprint $table) {
            $table->string('name')->default('{"ar":"مشروع انشاء مجمع سكني","en":"Iron worksIron works"}');
            $table->string('link')->default('https://google.com');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partner_items', function (Blueprint $table) {
            $table->string('name')->default('{"ar":"مشروع انشاء مجمع سكني","en":"Iron worksIron works"}');
            $table->string('link')->default('https://google.com');
        });
    }
};
