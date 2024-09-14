<?php

namespace Database\Seeders;

use App\Models\ShiftModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shift = [
            [
                'deskripsi' => 'shift1',
                'jam_awal' => '07:30:00',
                'jam_akhir' => '13:30:00',
                'dibuat' => 'admin',
            ],
            [
                'deskripsi' => 'shift2',
                'jam_awal' => '15:30:00',
                'jam_akhir' => '21:30:00',
                'dibuat' => 'admin',
            ],
            [
                'deskripsi' => 'shift3',
                'jam_awal' => '00:01:00',
                'jam_akhir' => '05:00:00',
                'dibuat' => 'admin',
            ],
        ];

        foreach ($shift as $s) {
            ShiftModel::create($s);
        }
    }
}
