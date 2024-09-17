<?php

namespace App\Http\Controllers\Datatables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CetakList extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('qrcode');
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('select_orders', function ($row) {
                    return '<input type="checkbox" name="select_orders[]" value="' . $row->id . '">';
                })
                ->editColumn('status', function ($row) {
                    $status = $row->status;
                    $badge = '';

                    if ($status) {
                        // Status is 1 (true)
                        $badge = '<span class="status-dot status-dot-animated status-green" style="font-size:11px"></span> <b class="text-green">Aktif</b>';
                    } else {
                        // Status is 0 (false)
                        $badge = '<span class="status-dot status-dot-animated status-blue" style="font-size:11px"></span> <b class="text-blue">Diberhentikan</b>';
                    }

                    return $badge;
                })
                ->rawColumns(['status', 'select_orders'])
                ->make(true);
        }

        return view('pages.products.QrCode.cetakQr');
    }
}
