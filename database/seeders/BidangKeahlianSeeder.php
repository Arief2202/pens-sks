<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\BidangKeahlian;

class BidangKeahlianSeeder extends Seeder
{
    public function run()
    {
        BidangKeahlian::insert([
            ['namaBidangKeahlian' => 'Database'],
            ['namaBidangKeahlian' => 'Big Data'],
            ['namaBidangKeahlian' => 'Machine Learning'],
            ['namaBidangKeahlian' => 'Cloud Computation'],
            ['namaBidangKeahlian' => 'Statistic Education'],
            ['namaBidangKeahlian' => 'English Education'],
            ['namaBidangKeahlian' => 'Security'],
            ['namaBidangKeahlian' => 'Data Sains'],
            ['namaBidangKeahlian' => 'Computer Network'],
            ['namaBidangKeahlian' => 'IoT'],
            ['namaBidangKeahlian' => 'WSN'],
            ['namaBidangKeahlian' => 'Computer Vision'],
            ['namaBidangKeahlian' => 'Image Processing'],
            ['namaBidangKeahlian' => 'Information System'],
            ['namaBidangKeahlian' => 'Math Education'],     
            ['namaBidangKeahlian' => 'Soft Computation'],
            ['namaBidangKeahlian' => 'Software Engineering'],
            ['namaBidangKeahlian' => 'Mobile Apps'],
            ['namaBidangKeahlian' => 'Web Programming'],
            ['namaBidangKeahlian' => 'Programming'],
            ['namaBidangKeahlian' => 'Bahasa Inggris'],
            ['namaBidangKeahlian' => 'Unknown']
        ]);
    }
}
