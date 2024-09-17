<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('karyawan')->insert([
            [
                'badgenumber' => '12345',
                'nama' => 'Ahmad Rizki',
                'tinggi' => 170.5,
                'berat' => 65.5,
                'stb' => 'STB001',
                'gender' => 'Laki-laki',
                'tempat' => 'Cirebon',
                'tgllahir' => '1990-05-15',
                'ktp' => '3276061505900001',
                'pendidikan' => 'S1 Teknik Informatika',
                'alamat' => 'Jl. Sudirman No. 10',
                'alamatnow' => 'Jl. Merdeka No. 5',
                'agama' => 'Islam',
                'telepon' => '081234567890',
                'tglmasuk' => Carbon::create('2020', '01', '15'),
                'tglkeluar' => null,
                'nomap' => 'MAP001',
                'level' => 'Senior',
                'divisi' => 'IT',
                'bagian' => 'Developer',
                'jabatan' => 'Full Stack Developer',
                'grup' => 'A',
                'profesi' => 'Programmer',
                'shift' => 'Pagi',
                'hrlibur' => 'Minggu',
                'deptid' => 'DEP001',
                'perjanjian' => 'Kontrak',
                'internal' => 'Yes',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'badgenumber' => '12346',
                'nama' => 'Budi Santoso',
                'tinggi' => 175.0,
                'berat' => 70.0,
                'stb' => 'STB002',
                'gender' => 'Laki-laki',
                'tempat' => 'Jakarta',
                'tgllahir' => '1985-08-20',
                'ktp' => '3176062008850002',
                'pendidikan' => 'S1 Manajemen',
                'alamat' => 'Jl. Thamrin No. 15',
                'alamatnow' => 'Jl. Pancasila No. 8',
                'agama' => 'Kristen',
                'telepon' => '081234567891',
                'tglmasuk' => Carbon::create('2019', '03', '10'),
                'tglkeluar' => null,
                'nomap' => 'MAP002',
                'level' => 'Manager',
                'divisi' => 'HRD',
                'bagian' => 'Rekrutmen',
                'jabatan' => 'HR Manager',
                'grup' => 'B',
                'profesi' => 'HR Specialist',
                'shift' => 'Siang',
                'hrlibur' => 'Sabtu',
                'deptid' => 'DEP002',
                'perjanjian' => 'Tetap',
                'internal' => 'No',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'badgenumber' => '12347',
                'nama' => 'Siti Aminah',
                'tinggi' => 160.0,
                'berat' => 55.0,
                'stb' => 'STB003',
                'gender' => 'Perempuan',
                'tempat' => 'Bandung',
                'tgllahir' => '1992-11-10',
                'ktp' => '3276061011920003',
                'pendidikan' => 'S1 Akuntansi',
                'alamat' => 'Jl. Pasteur No. 20',
                'alamatnow' => 'Jl. Diponegoro No. 3',
                'agama' => 'Islam',
                'telepon' => '081234567892',
                'tglmasuk' => Carbon::create('2021', '05', '20'),
                'tglkeluar' => null,
                'nomap' => 'MAP003',
                'level' => 'Staff',
                'divisi' => 'Keuangan',
                'bagian' => 'Akuntansi',
                'jabatan' => 'Akuntan',
                'grup' => 'C',
                'profesi' => 'Akuntan',
                'shift' => 'Malam',
                'hrlibur' => 'Jumat',
                'deptid' => 'DEP003',
                'perjanjian' => 'Kontrak',
                'internal' => 'Yes',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
