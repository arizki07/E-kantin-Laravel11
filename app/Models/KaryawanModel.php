<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanModel extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $fillable = [
        'badgenumber',
        'nama',
        'tinggi',
        'berat',
        'stb',
        'gender',
        'tempat',
        'tgllahir',
        'ktp',
        'pendidikan',
        'alamat',
        'alamatnow',
        'agama',
        'telepon',
        'tglmasuk',
        'tgl_keluar',
        'nomap',
        'level',
        'divisi',
        'bagian',
        'jabatan',
        'grup',
        'profesi',
        'shift',
        'hrlibur',
        'deptid',
        'perjanjian',
        'internal',
        'status',
    ];
}
