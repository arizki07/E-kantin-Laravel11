<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrCodeModel extends Model
{
    use HasFactory;
    protected $table = 'qrcode';
    protected $fillable = [
        'qr_stb',
        'nama',
        'qr_stb_encrypt',
        'file',
    ];
}
