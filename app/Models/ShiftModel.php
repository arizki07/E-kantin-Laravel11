<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftModel extends Model
{
    use HasFactory;
    protected $table = 'shift';
    protected $fillable = [
        'deskripsi',
        'jam_awal',
        'jam_akhir',
        'dibuat',
    ];
}
