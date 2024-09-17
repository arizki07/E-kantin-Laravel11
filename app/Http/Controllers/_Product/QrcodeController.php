<?php

namespace App\Http\Controllers\_Product;

use App\Http\Controllers\Controller;
use App\Models\KaryawanModel;
use App\Models\KuponModel;
use App\Models\QrCodeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class QrcodeController extends Controller
{
    public function index()
    {
        return view('pages.products.qrcode', [
            'judul' => 'Data QrCode'
        ]);
    }

    public function cetak()
    {
        return view('pages.products.QrCode.cetakQr', [
            'judul' => 'Cetak QR CODE'
        ]);
    }

    public function sync()
    {
        return view('pages.products.QrCode.syncQr', [
            'judul' => 'Syncronisasi Qr',
        ]);
    }

    public function syncQr(Request $request)
    {
        $request->validate([
            'qr_stb_encrypt' => 'required|string',
            'qr_file' => 'required|file|mimes:png,jpg,jpeg',
        ]);

        // Mulai transaksi database
        DB::beginTransaction();
        try {
            // Dekripsi qr_stb_encrypt untuk mendapatkan stb asli
            $stb = Crypt::decrypt($request->qr_stb_encrypt);

            // Temukan data karyawan berdasarkan stb yang didekripsi
            $karyawan = KaryawanModel::where('stb', $stb)->first();

            if (!$karyawan) {
                return response()->json(['message' => 'Karyawan tidak ditemukan'], 404);
            }

            // Hanya update status karyawan jika status masih false
            if (!$karyawan->status) {
                $karyawan->status = true;
                $karyawan->save();
            }

            // Simpan file QR ke storage
            $path = $request->file('qr_file')->store('public/qrcodes');

            // Simpan data ke tabel qrcode
            $qrcode = QrCodeModel::updateOrCreate(
                ['qr_stb' => $stb],
                [
                    'nama' => $karyawan->nama,
                    'qr_stb_encrypt' => $request->qr_stb_encrypt, // Tetap simpan qr_stb terenkripsi
                    'file' => $path,
                ]
            );

            // Simpan data ke tabel kupon
            $kupon = KuponModel::create([
                'stb' => $stb,
                'jam' => now()->format('H:i:s'),
                'tgl' => now()->format('Y-m-d'),
                'kupon' => 'KUPON1234', // Generate kupon secara dinamis
                'status' => 1, // Status kupon (sesuaikan dengan aturan)
                'kantin' => 1, // Sesuaikan dengan nilai kantin
                'kabag' => 1, // Sesuaikan dengan nilai kabag
                'reliever' => 0, // Sesuaikan dengan nilai reliever
            ]);

            // Commit transaksi jika semuanya berhasil
            DB::commit();

            return response()->json(['message' => 'Sync QR berhasil, data disimpan ke qrcode dan kupon'], 200);
        } catch (\Exception $e) {
            // Rollback jika ada error
            DB::rollback();
            return response()->json(['message' => 'Sync QR gagal', 'error' => $e->getMessage()], 500);
        }
    }
}
