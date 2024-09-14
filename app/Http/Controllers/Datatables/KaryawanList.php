<?php

namespace App\Http\Controllers\Datatables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class KaryawanList extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('karyawan');
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('pages.products.karyawan');
    }
}
