<?php

namespace App\Http\Controllers\_Product;

use App\Http\Controllers\Controller;
use App\Models\GrpshiftModel;
use App\Models\ShiftModel;
use Illuminate\Http\Request;

class PenganturanController extends Controller
{
    public function index()
    {
        $shifts = ShiftModel::all();
        $grp = GrpshiftModel::all();
        return view('pages.products.pengaturan', [
            'judul' => 'Data Pengaturan',
            'shifts' => $shifts,
            'grp' => $grp,
        ]);
    }
}
