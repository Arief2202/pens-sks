<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\DaftarBidangKeahlian;

class DaftarBidangKeahlianSeeder extends Seeder
{
    public function run()
    {
        DaftarBidangKeahlian::insert([
            ['bidangKeahlian_id' => '1', 'dosen_id' => '6'], //Pak Syauqi (Database)
            ['bidangKeahlian_id' => '2', 'dosen_id' => '6'], //Pak Syauqi (Big Data)
            ['bidangKeahlian_id' => '16', 'dosen_id' => '7'], //Pak Ali (Soft Computation)
            ['bidangKeahlian_id' => '17', 'dosen_id' => '8'], //Pak Andhik (Software Engineering)
            ['bidangKeahlian_id' => '1', 'dosen_id' => '9'], //Pak Arif (Database)
            ['bidangKeahlian_id' => '17', 'dosen_id' => '10'], //Bu Desy (Software Engineering)
            ['bidangKeahlian_id' => '20', 'dosen_id' => '11'], //Bu Arna (Programming)
            ['bidangKeahlian_id' => '12', 'dosen_id' => '11'], //Bu Arna (Computer Vision)
            ['bidangKeahlian_id' => '9', 'dosen_id' => '12'], //Pak Idris (Computer Network)
            ['bidangKeahlian_id' => '3', 'dosen_id' => '13'], //Bu Tita (Machine Learning)
            ['bidangKeahlian_id' => '12', 'dosen_id' => '13'], //Bu Tita (Computer Vision)
            ['bidangKeahlian_id' => '16', 'dosen_id' => '14'], //Bu Entin (Soft Computation)
            ['bidangKeahlian_id' => '20', 'dosen_id' => '14'], //Bu Entin (Programming)
            ['bidangKeahlian_id' => '18', 'dosen_id' => '15'], //Pak Fahrul (Mobile Apps)
            ['bidangKeahlian_id' => '19', 'dosen_id' => '15'], //Pak Fahrul (Web Programming)
            ['bidangKeahlian_id' => '9', 'dosen_id' => '16'], //Pak Ferry (Computer Network)
            ['bidangKeahlian_id' => '7', 'dosen_id' => '16'], //Pak Ferry (Security)
            ['bidangKeahlian_id' => '9', 'dosen_id' => '17'], //Bu Fitri (Computer Network)
            ['bidangKeahlian_id' => '12', 'dosen_id' => '18'], //Pak Hero (Computer Vision)
            ['bidangKeahlian_id' => '4', 'dosen_id' => '18'], //Pak Hero (Cloud Computation)
            ['bidangKeahlian_id' => '15', 'dosen_id' => '19'], //Bu Ira (Math Education)
            ['bidangKeahlian_id' => '5', 'dosen_id' => '19'], //Bu Ira (Statistic Education)
            ['bidangKeahlian_id' => '6', 'dosen_id' => '20'], //Pak Irwan (English Education)
            ['bidangKeahlian_id' => '9', 'dosen_id' => '21'], //Pak Isbat (Computer Network)
            ['bidangKeahlian_id' => '7', 'dosen_id' => '21'], //Pak Isbat (Security)
            ['bidangKeahlian_id' => '8', 'dosen_id' => '21'], //Pak Isbat (Data Sains)
            ['bidangKeahlian_id' => '9', 'dosen_id' => '22'], //Pak Iwan (Computer Network)
            ['bidangKeahlian_id' => '10', 'dosen_id' => '23'], //Pak Udin (IoT)
            ['bidangKeahlian_id' => '11', 'dosen_id' => '23'], //Pak Udin (WSN)
            ['bidangKeahlian_id' => '19', 'dosen_id' => '23'], //Pak Udin (Web Programming)
            ['bidangKeahlian_id' => '16', 'dosen_id' => '24'], //Pak Mu'a (Soft Computation)
            ['bidangKeahlian_id' => '19', 'dosen_id' => '24'], //Pak Mu'a (Web Programming)
            ['bidangKeahlian_id' => '17', 'dosen_id' => '25'], //Bu Nai (Software Engineering)
            ['bidangKeahlian_id' => '12', 'dosen_id' => '26'], //Bu Nana (Computer Vision)
            ['bidangKeahlian_id' => '13', 'dosen_id' => '26'], //Bu Nana (Image Processing)
            ['bidangKeahlian_id' => '17', 'dosen_id' => '27'], //Pak Rosyid (Software Engineering)
            ['bidangKeahlian_id' => '1', 'dosen_id' => '28'], //Pak Rengga (Database)
            ['bidangKeahlian_id' => '14', 'dosen_id' => '28'], //Pak Rengga (Information System)
            ['bidangKeahlian_id' => '15', 'dosen_id' => '29'], //Bu Disa (Math Education)
            ['bidangKeahlian_id' => '1', 'dosen_id' => '30'], //Bu Tessy (Database)
            ['bidangKeahlian_id' => '16', 'dosen_id' => '31'], //Bu Lely (Soft Computation)
            ['bidangKeahlian_id' => '17', 'dosen_id' => '32'], //Bu Umi (Software Engineering)
            ['bidangKeahlian_id' => '1', 'dosen_id' => '33'], //Pak Moko (Database)
            ['bidangKeahlian_id' => '19', 'dosen_id' => '33'], //Pak Moko (Web Programming)
            ['bidangKeahlian_id' => '18', 'dosen_id' => '34'], //Pak Yanuar (Mobile Apps)
            ['bidangKeahlian_id' => '19', 'dosen_id' => '34'], //Pak Yanuar (Web Programming)
            ['bidangKeahlian_id' => '20', 'dosen_id' => '35'], //Bu Yuli (Programming)
        ]);
        for($a = 1; $a < 35; $a++){
            DaftarBidangKeahlian::insert([
                'bidangKeahlian_id' => '22', 'dosen_id' => $a
            ]);
        }
    }
}
