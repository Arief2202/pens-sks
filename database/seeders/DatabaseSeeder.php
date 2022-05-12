<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\BidangKeahlianSeeder;
use Database\Seeders\DaftarBidangKeahlianSeeder;
use Database\Seeders\KelasSeeder;
use Database\Seeders\KurikulumSeeder;
use Database\Seeders\MataKuliahSeeder;
use Database\Seeders\MengajarSeeder;
use Database\Seeders\PaketKurikulumSeeder;
use Database\Seeders\SksMaksSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        BidangKeahlianSeeder::run();
        DaftarBidangKeahlianSeeder::run();
        KelasSeeder::run();
        KurikulumSeeder::run();
        MataKuliahSeeder::run();
        MengajarSeeder::run();
        PaketKurikulumSeeder::run();
        SksMaksSeeder::run();
        UserSeeder::run();
    }
}
