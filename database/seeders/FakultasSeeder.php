<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['FMIPA', 'FKIP',];

        foreach ($data as $fakultas){
            Fakultas::create ([
                'nama_fakultas' => $fakultas,
            ]);
        }
    }
}
