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
        Schema::create('kupon', function (Blueprint $table) {
            $table->id();  // auto_increment primary key
            $table->string('stb');
            $table->time('jam');
            $table->date('tgl');
            $table->string('kupon');
            $table->integer('status'); // Regular integer, no auto_increment
            $table->integer('kantin'); // Regular integer, no auto_increment
            $table->integer('kabag');  // Regular integer, no auto_increment
            $table->integer('reliever'); // Regular integer, no auto_increment
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kupon');
    }
};
