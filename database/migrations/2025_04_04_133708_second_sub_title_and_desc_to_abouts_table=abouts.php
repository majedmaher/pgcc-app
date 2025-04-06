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
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('second_sub_title')->default('a')->after('sub_description');
            $table->text('second_sub_description')->default('a')->after('second_sub_title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('second_sub_title')->default('a')->after('sub_description');
            $table->text('second_sub_description')->default('a')->after('second_sub_title');
        });
    }
};
