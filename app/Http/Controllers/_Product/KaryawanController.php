<?php

namespace App\Http\Controllers\_product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function karyawan()
    {
        return view('pages.products.karyawan', [
            'judul' => 'Data Karyawan',
        ]);
    }
}
