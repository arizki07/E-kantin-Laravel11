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
        Schema::create('shift', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi');
            $table->string('jam_awal');
            $table->string('jam_akhir');
            $table->string('dibuat');
            $table->timestamps();
        });

        Schema::create('grpshift', function (Blueprint $table) {
            $table->id();
            $table->string('grup');
            $table->string('satpam');
            $table->string('shift');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift');
        Schema::dropIfExists('grpshift');
    }
};
