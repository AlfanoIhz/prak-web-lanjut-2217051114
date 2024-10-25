<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use App\Models\Fakultas;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Ilmu Komputer', 'Fisika', 'Kimia', 'Matematika', 'Biologi'];

        foreach ($data as $jurusan){
            Jurusan::create ([
                'nama_jurusan' => $jurusan,
                'fakultas_id' => 1, 
            ]);
        }
    }
}
