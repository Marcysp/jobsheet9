<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'Nim' => 1,
            'Nama' => 'alvina',
            'kelas_id' => '1',
            'Jurusan' => 'Teknologi Informasi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 2,
            'Nama' => 'afi',
            'kelas_id' => '1',
            'Jurusan' => 'Teknologi Informasi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 3,
            'Nama' => 'nanda',
            'kelas_id' => '1',
            'Jurusan' => 'Teknologi Informasi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 4,
            'Nama' => 'anisa',
            'kelas_id' => '1',
            'Jurusan' => 'Teknologi Informasi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 5,
            'Nama' => 'rofid',
            'kelas_id' => '1',
            'Jurusan' => 'Teknologi Informasi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 6,
            'Nama' => 'endar',
            'kelas_id' => '1',
            'Jurusan' => 'Teknologi Informasi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 7,
            'Nama' => 'eka',
            'kelas_id' => '5',
            'Jurusan' => 'Teknologi Informasi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Mahasiswa::create([
            'Nim' => 8,
            'Nama' => 'leli',
            'kelas_id' => '1',
            'Jurusan' => 'Teknologi Informasi',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
