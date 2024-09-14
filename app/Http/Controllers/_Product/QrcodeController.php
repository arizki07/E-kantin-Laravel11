<?php

namespace App\Http\Controllers\_Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    public function index()
    {
        return view('pages.products.qrcode', [
            'judul' => 'Data QrCode'
        ]);
    }
}
