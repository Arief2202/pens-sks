<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\BidangKeahlian;
use App\Models\DaftarBidangKeahlian;
use App\Models\Kelas;
use App\Models\Kurikulum;
use App\Models\MataKuliah;
use App\Models\Mengajar;
use App\Models\PaketKurikulum;
use App\Models\SksMaks;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'nama' => 'Arief',
            'email' => 'arief.d2202@gmail.com',
            'role' => '1',
            'password' => '$2y$10$P1cEQWYjiF4eiaKc04c/he4c3bWzQ9gMyvcsieJjsdW04jhmIUkqu',
        ]);
        User::create([
            'nama' => 'ketigakalinya',
            'email' => 'adebayubudiono@it.student.pens.ac.id',
            'role' => '1',
            'password' => '$2y$10$GL/ZviqnLhgpwaBGNfioee.5hkpZHV97BO2riRw0R3S1WSnM5HVda',
        ]);
        User::create([
            'nama' => 'Rayhan Munir Wibowo',
            'email' => 'rayhan439@gmail.com',
            'role' => '1',
            'password' => '$2y$10$9vZ1O4EEEptVYiUcRXIQoOBoBiAuD6Y1yDv2Ev5ThGqyJfFzhr8G6',
        ]);
        User::create([
            'nama' => 'Farhan',
            'email' => 'farhanizzaz@gmail.com',
            'role' => '1',
            'password' => '$2y$10$f43JzdIy4RAlH3Gl6iPfBu5Jar1TG2nlDrM4cqOzQcVsjwyZ5Swn2',
        ]);
        User::create([
            'nama' => 'ayin',
            'email' => 'ayinmadani@gmail.com',
            'role' => '1',
            'password' => '$2y$10$JUUKFmyB9pWCIAcTjC12QOT5XdV7t8peTA3.zbNvaUUj.pwGwBVq.',
        ]);
        SksMaks::create([
            'nilaiSKSMaks' => '20'
        ]);
        BidangKeahlian::create([
            'namaBidangKeahlian' => 'Bahasa Inggris'
        ]);
        Kurikulum::create([
            'namaKurikulum' => '2013'
        ]);
        MataKuliah::create([
            'bidangKeahlian_id' => '1',
            'namaMataKuliah' => 'Bahasa Inggris 1'
        ]);
    }
}
