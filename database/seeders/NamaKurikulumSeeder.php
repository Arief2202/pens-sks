<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\NamaKurikulum;

class NamaKurikulumSeeder extends Seeder
{
    public static function run()
    {
        NamaKurikulum::insert([
            ['namaKurikulum' => '2019', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaKurikulum' => '2022', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
        ]);
    }
}
