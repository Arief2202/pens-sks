<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\PaketKurikulum;

class PaketKurikulumSeeder extends Seeder
{
    public function run()
    {
        $matkulPerSemester = array(0, 10, 21, 32, 42, 48, 54);
        $pos = 1;
        for($a = 1; $a < 54; $a++){
            if($a >= $matkulPerSemester[$pos])$pos++;
            PaketKurikulum::insert([
                'prodi' => 'D3', 'semester' => $pos, 'kurikulum_id' => '1', 'mataKuliah_id' => $a
            ]);
        }
    }
}
