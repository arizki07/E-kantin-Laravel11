<?php

namespace Database\Seeders;

use App\Models\GrpShiftModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrpShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grp = [
            [
                'grup' => 'A',
                'satpam' => '1',
                'shift' => '1',
            ],
            [
                'grup' => 'B',
                'satpam' => '2',
                'shift' => '2',
            ],
            [
                'grup' => 'C',
                'satpam' => '3',
                'shift' => '3',
            ],
        ];

        foreach ($grp as $g) {
            GrpShiftModel::create($g);
        }
    }
}
