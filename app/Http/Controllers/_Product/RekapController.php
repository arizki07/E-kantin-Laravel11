<?php

namespace App\Http\Controllers\_Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index()
    {
        return view('pages.products.rekap', [
            'judul' => 'Data Rekap',
        ]);
    }
}
