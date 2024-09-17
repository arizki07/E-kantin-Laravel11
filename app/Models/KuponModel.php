<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuponModel extends Model
{
    use HasFactory;
    protected $table = 'kupon';
    protected $filllable = [
        'stb',
        'jam',
        'tgl',
        'kupon',
        'status',
        'kantin',
        'kabag',
        'reliever',
    ];
}
