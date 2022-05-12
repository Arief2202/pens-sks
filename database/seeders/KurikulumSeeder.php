<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Kurikulum;

class KurikulumSeeder extends Seeder
{
    public function run()
    {
        Kurikulum::insert([
            ['namaKurikulum' => '2019'],
            ['namaKurikulum' => '2022'],
        ]);
    }
}
