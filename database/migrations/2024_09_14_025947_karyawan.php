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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('badgenumber')->nullable();
            $table->string('nama')->nullable();
            $table->float('tinggi')->nullable();
            $table->float('berat')->nullable();
            $table->string('stb')->nullable();
            $table->string('gender')->nullable();
            $table->string('tempat')->nullable();
            $table->string('tgllahir')->nullable();
            $table->string('ktp')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('alamatnow')->nullable();
            $table->string('agama')->nullable();
            $table->string('telepon')->nullable();
            $table->date('tglmasuk')->nullable();
            $table->date('tglkeluar')->nullable();
            $table->string('nomap')->nullable();
            $table->string('level')->nullable();
            $table->string('divisi')->nullable();
            $table->string('bagian')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('grup')->nullable();
            $table->string('profesi')->nullable();
            $table->string('shift')->nullable();
            $table->string('hrlibur')->nullable();
            $table->string('deptid')->nullable();
            $table->string('perjanjian')->nullable();
            $table->string('internal')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
