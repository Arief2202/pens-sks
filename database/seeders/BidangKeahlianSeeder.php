<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\BidangKeahlian;

class BidangKeahlianSeeder extends Seeder
{
    public static function run()
    {
        BidangKeahlian::insert([
            ['namaBidangKeahlian' => 'Database', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Big Data', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Machine Learning', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Cloud Computation', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Statistic Education', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'English Education', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Security', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Data Sains', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Computer Network', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'IoT', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'WSN', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Computer Vision', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Image Processing', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Information System', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Math Education', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],     
            ['namaBidangKeahlian' => 'Soft Computation', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Software Engineering', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Mobile Apps', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Web Programming', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Programming', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'Bahasa Inggris', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],
            ['namaBidangKeahlian' => 'All', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]
        ]);
    }
}
