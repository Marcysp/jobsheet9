<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mhsMatkul = [
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 1,
                'nilai' => 89,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 2,
                'nilai' => 79,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 3,
                'nilai' => 87,
            ],
            [
                'mahasiswa_id' => 1,
                'matakuliah_id' => 4,
                'nilai' => 84,
            ],
            [
                'mahasiswa_id' => 2,
                'matakuliah_id' => 1,
                'nilai' => 89,
            ],
            [
                'mahasiswa_id' => 2,
                'matakuliah_id' => 2,
                'nilai' => 79,
            ],
            [
                'mahasiswa_id' => 2,
                'matakuliah_id' => 3,
                'nilai' => 87,
            ],
            [
                'mahasiswa_id' => 2,
                'matakuliah_id' => 4,
                'nilai' => 84,
            ],
        ];

        DB::table('mahasiswa_matakuliah')->insert($mhsMatkul);
    }
}
