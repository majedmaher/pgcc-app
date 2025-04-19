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
        Schema::table('settings', function (Blueprint $table) {
            $table->string('background_video')->default('imgs/basic/bg.mp');
            $table->string('email')->default('info@pgcc.com.sa');
            $table->string('phone_number')->default('0112112312');
            $table->string('mobile_number')->default('12214');
            $table->string('post_code')->default('12214');
            $table->string('sb_number')->default('2103');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('background_video')->default('imgs/basic/bg.mp');
            $table->string('email')->default('info@pgcc.com.sa');
            $table->string('phone_number')->default('0112112312');
            $table->string('mobile_number')->default('12214');
            $table->string('post_code')->default('12214');
            $table->string('sb_number')->default('2103');
        });
    }
};
