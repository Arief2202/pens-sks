<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\PaketKurikulum;

class PaketKurikulumSeeder extends Seeder
{
    public static function run()
    {
        $matkulPerSemester = array(0, 11, 22, 33, 43, 49, 55);
        $pos = 1;
        for($a = 1; $a < 55; $a++){
            if($a >= $matkulPerSemester[$pos])$pos++;
            PaketKurikulum::insert([
                'prodi' => 'D3', 'semester' => $pos, 'kurikulum_id' => '1', 'mataKuliah_id' => $a, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
