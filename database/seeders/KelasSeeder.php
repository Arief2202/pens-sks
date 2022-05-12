<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run()
    {
        Kelas::insert([
            ['prodi' => 'D3', 'semester' => '1', 'kurikulum_id' => '1'],
            ['prodi' => 'D3', 'semester' => '2', 'kurikulum_id' => '1'],
            ['prodi' => 'D3', 'semester' => '3', 'kurikulum_id' => '1'],
            ['prodi' => 'D3', 'semester' => '4', 'kurikulum_id' => '1'],
            ['prodi' => 'D3', 'semester' => '5', 'kurikulum_id' => '1'],
            ['prodi' => 'D3', 'semester' => '6', 'kurikulum_id' => '1'],
            
            ['prodi' => 'D4', 'semester' => '1', 'kurikulum_id' => '1'],
            ['prodi' => 'D4', 'semester' => '2', 'kurikulum_id' => '1'],
            ['prodi' => 'D4', 'semester' => '3', 'kurikulum_id' => '1'],
            ['prodi' => 'D4', 'semester' => '4', 'kurikulum_id' => '1'],
            ['prodi' => 'D4', 'semester' => '5', 'kurikulum_id' => '1'],
            ['prodi' => 'D4', 'semester' => '6', 'kurikulum_id' => '1'],
            ['prodi' => 'D4', 'semester' => '7', 'kurikulum_id' => '1'],
            ['prodi' => 'D4', 'semester' => '8', 'kurikulum_id' => '1'],
        ]);
    }
}
