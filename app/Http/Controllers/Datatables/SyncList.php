<?php

namespace App\Http\Controllers\Datatables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class SyncList extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('karyawan')
                ->leftJoin('qrcode', 'karyawan.stb', '=', 'qrcode.qr_stb')
                ->select(
                    'karyawan.id',
                    'karyawan.badgenumber',
                    'karyawan.nama as nama',
                    'karyawan.divisi',
                    'karyawan.bagian',
                    'karyawan.jabatan',
                    'karyawan.grup',
                    'karyawan.shift',
                    'karyawan.stb',
                    'qrcode.qr_stb',
                    'qrcode.nama as qrcode_nama',
                    'qrcode.qr_stb_encrypt',
                    'qrcode.file'
                )
                ->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->make(true);
        }

        return view('pages.products.QrCode.syncQr');
    }
}
