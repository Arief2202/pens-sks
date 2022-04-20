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

        //developer
        User::insert([
            ['nip' => '3120500011', 'nama' => 'Mohammad Arief Darmawan', 'alias' => 'Arief', 'email' => 'arief.d2202@gmail.com', 'role' => '1', 'password' => '$2y$10$P1cEQWYjiF4eiaKc04c/he4c3bWzQ9gMyvcsieJjsdW04jhmIUkqu'],
            ['nip' => '3120500021', 'nama' => 'Ade Bayu Budiono', 'alias' => 'Ade', 'email' => 'adebayubudiono@it.student.pens.ac.id', 'role' => '1', 'password' => '$2y$10$GL/ZviqnLhgpwaBGNfioee.5hkpZHV97BO2riRw0R3S1WSnM5HVda'],
            ['nip' => '3120500009', 'nama' => 'Rayhan Munir Wibowo', 'alias' => 'Rayhan', 'email' => 'rayhan439@gmail.com', 'role' => '1', 'password' => '$2y$10$9vZ1O4EEEptVYiUcRXIQoOBoBiAuD6Y1yDv2Ev5ThGqyJfFzhr8G6'],
            ['nip' => '3120500029', 'nama' => 'Farhan Izzudin Az Zufar', 'alias' => 'Farhan', 'email' => 'farhanizzaz@gmail.com', 'role' => '1', 'password' => '$2y$10$f43JzdIy4RAlH3Gl6iPfBu5Jar1TG2nlDrM4cqOzQcVsjwyZ5Swn2'],
            ['nip' => '3120500012', 'nama' => 'Madani Sofi Arina Hanif', 'alias' => 'Ayin', 'email' => 'ayinmadani@gmail.com', 'role' => '1', 'password' => '$2y$10$JUUKFmyB9pWCIAcTjC12QOT5XdV7t8peTA3.zbNvaUUj.pwGwBVq.']
        ]);

        //dosen
        User::insert([
            ['nip' => '197505302003121001', 'email' => 'syauqi@pens.ac.id', 'nama' => 'Ahmad Syauqi Ahsan, S.Kom., M.T.', 'alias' => 'Pak Syauqi'],	//Database, Big Data
            ['nip' => '197308162001121001', 'email' => 'ali@pens.ac.id', 'nama' => 'Aliridho Barakbah, S.Kom., Ph.D.', 'alias' => 'Pak Ali'], 	//Soft Computation
            ['nip' => '199208022019031013', 'email' => 'andhik@pens.ac.id', 'nama' => 'Andhik Ampuh Yunanto S.Kom., M.Kom.', 'alias' => 'Pak Andhik'],	//Software Engineering
            ['nip' => '197609212003121002', 'email' => 'arif@pens.ac.id', 'nama' => 'Arif Basofi, S.Kom., M.T.',  'alias' => 'Pak Arif'],	//Database
            ['nip' => '198603232015042004', 'email' => 'desy@pens.ac.id', 'nama' => 'Desy Intan Permatasari, S.Kom., M.Kom.', 'alias' => 'Bu Desy'], //Software Engineering
            ['nip' => '197107081999032001', 'email' => 'arna@pens.ac.id', 'nama' => 'Dr. Arna Fariza, S.Kom., M.Kom.', 'alias' => 'Bu Arna'], //Programming, Computer Vision
            ['nip' => '198203082008121001', 'email' => 'idris@pens.ac.id', 'nama' => 'Dr. Eng. Idris Winarno, S.ST., M.Kom.', 'alias' => 'Pak Idris'], //Computer Network
            ['nip' => '197910142002122002', 'email' => 'tita@pens.ac.id', 'nama' => 'Dr. Tita Karlita S.Kom., M.Kom.', 'alias' => 'Bu Tita'], //Machine Learning, Computer Vision
            ['nip' => '197403122000122001', 'email' => 'entin@pens.ac.id', 'nama' => 'Entin Martiana Kusumaningtyas, S.Kom., M.Kom.', 'alias' => 'Bu Entin'], //Soft Computation, Programming
            ['nip' => '198901292019031013', 'email' => 'fahrul@pens.ac.id', 'nama' => 'Fadilah Fahrul Hardiansyah, S.ST., M.Kom.', 'alias' => 'Pak Fahrul'], //Mobile Apps, Web Programming
            ['nip' => '197708232001121002', 'email' => 'ferry@pens.ac.id', 'nama' => 'Ferry Astika Saputra, S.T., M.Sc.', 'alias' => 'Pak Ferry'], //Computer Network, Security
            ['nip' => '197707072001122001', 'email' => 'fitri@pens.ac.id', 'nama' => 'Fitri Setyorini, S.T., M.Sc.', 'alias' => 'Bu Fitri'], //Computer Network
            ['nip' => '197811032005011002', 'email' => 'hero@pens.ac.id', 'nama' => 'Hero Yudo Martono, S.T., M.T.', 'alias' => 'Pak Hero'], //Computer Vision, Cloud Computation
            ['nip' => '198005292008122005', 'email' => 'ira@pens.ac.id', 'nama' => 'Ira Prasetyaningrum, S.Si., M.T.', 'alias' => 'Bu Ira'],	//Math and Statistic Education
            ['nip' => '196912192002121001', 'email' => 'irwan@pens.ac.id', 'nama' => 'Irwan Sumarsono, S.S., M.Pd.', 'alias' => 'Pak Irwan'], //English Education
            ['nip' => '197405052003121002', 'email' => 'isbat@pens.ac.id', 'nama' => 'Isbat Uzzin Nadhori, S.Kom., M.T.', 'alias' => 'Pak Isbat'],	//Computer Network, Security, Data Sains
            ['nip' => '196904041995121002', 'email' => 'iwan@pens.ac.id', 'nama' => 'Iwan Syarif, S.Kom., M.Kom., M.Sc., Ph.D.', 'alias' => 'Pak Iwan'],	//Computer Network
            ['nip' => '198108082005011001', 'email' => 'udin@pens.ac.id', 'nama' => 'M. Udin Harun Al Rasyid, S.Kom., M.Sc., Ph.D', 'alias' => 'Pak Udin'], //IoT, WSN, Web Programming
            ['nip' => '198812032020121001', 'email' => 'mua@pens.ac.id', 'nama' => 'Mu\'arifin, S.ST., M.T.', 'alias' => 'Pak Mu\'a'],	//Soft Computation, Web Programming
            ['nip' => '199609072020122007', 'email' => 'nai@pens.ac.id', 'nama' => 'Nailussa\'ada, S.ST., M.Tr.Kom.', 'alias' => 'Bu Nai'],	//Software Engineering
            ['nip' => '197111091998022001', 'email' => 'nana@pens.ac.id', 'nama' => 'Nana Ramadijanti, S.Kom., M.Kom.', 'alias' => 'Bu Nana'],	//Computer Vision, Image Processing
            ['nip' => '197403182001121005', 'email' => 'rosyid@pens.ac.id', 'nama' => 'Nur Rosyid Mubtadai, S.Kom., M.T.', 'alias' => 'Pak Rosyid'],	//Software Engineering
            ['nip' => '198105082005011002', 'email' => 'rengga@pens.ac.id', 'nama' => 'Rengga Asmara, S.Kom., M.T.', 'alias' => 'Pak Rengga'],	//Database, Information System
            ['nip' => '198607032009122004', 'email' => 'disa@pens.ac.id', 'nama' => 'Rosiyah Faradisa S.Si., M.Si.', 'alias' => 'Bu Disa'],	//Math Education
            ['nip' => '197009142001122001', 'email' => 'tessy@pens.ac.id', 'nama' => 'Tessy Badriyah, S.Kom., M.T., Ph.D.', 'alias' => 'Bu Tessy'],	//Database
            ['nip' => '199210122018032001', 'email' => 'lely@pens.ac.id', 'nama' => 'Tri Hadiah Muliawati, S.ST., M.Kom.', 'alias' => 'Bu Lely'],	//Soft Computation
            ['nip' => '197404162000032003', 'email' => 'umi@pens.ac.id', 'nama' => 'Umi Sa\'adah, S.Kom., M.Kom.', 'alias' => 'Bu Umi'],	//Software Engineering
            ['nip' => '197911212005011003', 'email' => 'moko@pens.ac.id', 'nama' => 'Wiratmoko Yuwono, S.T., M.T.', 'alias' => 'Pak Moko'],	//Database, Web Pogramming
            ['nip' => '198801062019031009', 'email' => 'yanuar@pens.ac.id', 'nama' => 'Yanuar Risah Prayogi S.Kom., M.Kom.', 'alias' => 'Pak Yanuar'],	//Mobile Apps, Web Programming
            ['nip' => '197807062002122003', 'email' => 'yuli@pens.ac.id', 'nama' => 'Yuliana Setiowati, S.Kom., M.Kom.', 'alias' => 'Bu Yuli']	//Programming
        ]);

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
            ['namaBidangKeahlian' => 'Bahasa Inggris']
        ]);

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


        Kurikulum::create([
            'namaKurikulum' => '2013'
        ]);

    }
}
