<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\DaftarBidangKeahlian;

class DaftarBidangKeahlianSeeder extends Seeder
{
    public static function run()
    {
        DaftarBidangKeahlian::insert([
            ['bidangKeahlian_id' => '1', 'dosen_id' => '1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Syauqi (Database)
            ['bidangKeahlian_id' => '2', 'dosen_id' => '1', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Syauqi (Big Data)
            ['bidangKeahlian_id' => '16', 'dosen_id' => '2', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Ali (Soft Computation)
            ['bidangKeahlian_id' => '17', 'dosen_id' => '3', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Andhik (Software Engineering)
            ['bidangKeahlian_id' => '1', 'dosen_id' => '4', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Arif (Database)
            ['bidangKeahlian_id' => '17', 'dosen_id' => '5', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Desy (Software Engineering)
            ['bidangKeahlian_id' => '12', 'dosen_id' => '6', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Arna (Computer Vision)
            ['bidangKeahlian_id' => '20', 'dosen_id' => '6', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Arna (Programming)
            ['bidangKeahlian_id' => '9', 'dosen_id' => '7', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Idris (Computer Network)
            ['bidangKeahlian_id' => '3', 'dosen_id' => '8', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Tita (Machine Learning)
            ['bidangKeahlian_id' => '12', 'dosen_id' => '8', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Tita (Computer Vision)
            ['bidangKeahlian_id' => '16', 'dosen_id' => '9', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Entin (Soft Computation)
            ['bidangKeahlian_id' => '20', 'dosen_id' => '9', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Entin (Programming)
            ['bidangKeahlian_id' => '18', 'dosen_id' => '10', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Fahrul (Mobile Apps)
            ['bidangKeahlian_id' => '19', 'dosen_id' => '10', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Fahrul (Web Programming)
            ['bidangKeahlian_id' => '9', 'dosen_id' => '11', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Ferry (Computer Network)
            ['bidangKeahlian_id' => '7', 'dosen_id' => '11', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Ferry (Security)
            ['bidangKeahlian_id' => '9', 'dosen_id' => '12', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Fitri (Computer Network)
            ['bidangKeahlian_id' => '12', 'dosen_id' => '13', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Hero (Computer Vision)
            ['bidangKeahlian_id' => '4', 'dosen_id' => '13', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Hero (Cloud Computation)
            ['bidangKeahlian_id' => '15', 'dosen_id' => '14', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Ira (Math Education)
            ['bidangKeahlian_id' => '5', 'dosen_id' => '14', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Ira (Statistic Education)
            ['bidangKeahlian_id' => '6', 'dosen_id' => '15', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Irwan (English Education)
            ['bidangKeahlian_id' => '9', 'dosen_id' => '16', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Isbat (Computer Network)
            ['bidangKeahlian_id' => '7', 'dosen_id' => '16', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Isbat (Security)
            ['bidangKeahlian_id' => '8', 'dosen_id' => '16', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Isbat (Data Sains)
            ['bidangKeahlian_id' => '9', 'dosen_id' => '17', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Iwan (Computer Network)
            ['bidangKeahlian_id' => '10', 'dosen_id' => '18', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Udin (IoT)
            ['bidangKeahlian_id' => '11', 'dosen_id' => '18', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Udin (WSN)
            ['bidangKeahlian_id' => '19', 'dosen_id' => '18', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Udin (Web Programming)
            ['bidangKeahlian_id' => '16', 'dosen_id' => '19', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Mu'a (Soft Computation)
            ['bidangKeahlian_id' => '19', 'dosen_id' => '19', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Mu'a (Web Programming)
            ['bidangKeahlian_id' => '17', 'dosen_id' => '20', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Nai (Software Engineering)
            ['bidangKeahlian_id' => '12', 'dosen_id' => '21', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Nana (Computer Vision)
            ['bidangKeahlian_id' => '13', 'dosen_id' => '21', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Nana (Image Processing)
            ['bidangKeahlian_id' => '17', 'dosen_id' => '22', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Rosyid (Software Engineering)
            ['bidangKeahlian_id' => '1', 'dosen_id' => '23', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Rengga (Database)
            ['bidangKeahlian_id' => '14', 'dosen_id' => '23', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Rengga (Information System)
            ['bidangKeahlian_id' => '15', 'dosen_id' => '24', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Disa (Math Education)
            ['bidangKeahlian_id' => '1', 'dosen_id' => '25', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Tessy (Database)
            ['bidangKeahlian_id' => '16', 'dosen_id' => '26', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Lely (Soft Computation)
            ['bidangKeahlian_id' => '17', 'dosen_id' => '27', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Umi (Software Engineering)
            ['bidangKeahlian_id' => '1', 'dosen_id' => '28', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Moko (Database)
            ['bidangKeahlian_id' => '19', 'dosen_id' => '28', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Moko (Web Programming)
            ['bidangKeahlian_id' => '18', 'dosen_id' => '29', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Yanuar (Mobile Apps)
            ['bidangKeahlian_id' => '19', 'dosen_id' => '29', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Pak Yanuar (Web Programming)
            ['bidangKeahlian_id' => '20', 'dosen_id' => '30', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Bu Yuli (Programming)
        ]);
        for($a = 1; $a < 31; $a++){
            DaftarBidangKeahlian::insert([
                'bidangKeahlian_id' => '22', 'dosen_id' => $a
            ]);
        }
    }
}
