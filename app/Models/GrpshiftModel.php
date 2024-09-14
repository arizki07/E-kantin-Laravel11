<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrpshiftModel extends Model
{
    use HasFactory;
    protected $table = 'grpshift';
    protected $fillable = [
        'grup',
        'satpam',
        'shift',
    ];
}
