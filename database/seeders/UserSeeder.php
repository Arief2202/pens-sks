<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        //dosen
        User::insert([
            ['nip' => '197505302003121001', 'email' => 'syauqi@pens.ac.id', 'nama' => 'Ahmad Syauqi Ahsan, S.Kom., M.T.', 'alias' => 'Pak Syauqi', 'bebanMengajar' => '16', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Database, Big Data
            ['nip' => '197308162001121001', 'email' => 'ali@pens.ac.id', 'nama' => 'Aliridho Barakbah, S.Kom., Ph.D.', 'alias' => 'Pak Ali', 'bebanMengajar' => '8', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], 	//Soft Computation
            ['nip' => '199208022019031013', 'email' => 'andhik@pens.ac.id', 'nama' => 'Andhik Ampuh Yunanto S.Kom., M.Kom.', 'alias' => 'Pak Andhik', 'bebanMengajar' => '11', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Software Engineering
            ['nip' => '197609212003121002', 'email' => 'arif@pens.ac.id', 'nama' => 'Arif Basofi, S.Kom., M.T.',  'alias' => 'Pak Arif', 'bebanMengajar' => '10', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Database
            ['nip' => '198603232015042004', 'email' => 'desy@pens.ac.id', 'nama' => 'Desy Intan Permatasari, S.Kom., M.Kom.', 'alias' => 'Bu Desy', 'bebanMengajar' => '14', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Software Engineering
            ['nip' => '197107081999032001', 'email' => 'arna@pens.ac.id', 'nama' => 'Dr. Arna Fariza, S.Kom., M.Kom.', 'alias' => 'Bu Arna', 'bebanMengajar' => '16', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Programming, Computer Vision
            ['nip' => '198203082008121001', 'email' => 'idris@pens.ac.id', 'nama' => 'Dr. Eng. Idris Winarno, S.ST., M.Kom.', 'alias' => 'Pak Idris', 'bebanMengajar' => '11', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Computer Network
            ['nip' => '197910142002122002', 'email' => 'tita@pens.ac.id', 'nama' => 'Dr. Tita Karlita S.Kom., M.Kom.', 'alias' => 'Bu Tita', 'bebanMengajar' => '8', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Machine Learning, Computer Vision
            ['nip' => '197403122000122001', 'email' => 'entin@pens.ac.id', 'nama' => 'Entin Martiana Kusumaningtyas, S.Kom., M.Kom.', 'alias' => 'Bu Entin', 'bebanMengajar' => '19', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Soft Computation, Programming
            ['nip' => '198901292019031013', 'email' => 'fahrul@pens.ac.id', 'nama' => 'Fadilah Fahrul Hardiansyah, S.ST., M.Kom.', 'alias' => 'Pak Fahrul', 'bebanMengajar' => '14', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Mobile Apps, Web Programming
            ['nip' => '197708232001121002', 'email' => 'ferry@pens.ac.id', 'nama' => 'Ferry Astika Saputra, S.T., M.Sc.', 'alias' => 'Pak Ferry', 'bebanMengajar' => '4', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Computer Network, Security
            ['nip' => '197707072001122001', 'email' => 'fitri@pens.ac.id', 'nama' => 'Fitri Setyorini, S.T., M.Sc.', 'alias' => 'Bu Fitri', 'bebanMengajar' => '16', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Computer Network
            ['nip' => '197811032005011002', 'email' => 'hero@pens.ac.id', 'nama' => 'Hero Yudo Martono, S.T., M.T.', 'alias' => 'Pak Hero', 'bebanMengajar' => '5', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //Computer Vision, Cloud Computation
            ['nip' => '198005292008122005', 'email' => 'ira@pens.ac.id', 'nama' => 'Ira Prasetyaningrum, S.Si., M.T.', 'alias' => 'Bu Ira', 'bebanMengajar' => '16', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Math and Statistic Education
            ['nip' => '196912192002121001', 'email' => 'irwan@pens.ac.id', 'nama' => 'Irwan Sumarsono, S.S., M.Pd.', 'alias' => 'Pak Irwan', 'bebanMengajar' => '16', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //English Education
            ['nip' => '197405052003121002', 'email' => 'isbat@pens.ac.id', 'nama' => 'Isbat Uzzin Nadhori, S.Kom., M.T.', 'alias' => 'Pak Isbat', 'bebanMengajar' => '10', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Computer Network, Security, Data Sains
            ['nip' => '196904041995121002', 'email' => 'iwan@pens.ac.id', 'nama' => 'Iwan Syarif, S.Kom., M.Kom., M.Sc., Ph.D.', 'alias' => 'Pak Iwan', 'bebanMengajar' => '8', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Computer Network
            ['nip' => '198108082005011001', 'email' => 'udin@pens.ac.id', 'nama' => 'M. Udin Harun Al Rasyid, S.Kom., M.Sc., Ph.D', 'alias' => 'Pak Udin', 'bebanMengajar' => '13', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')], //IoT, WSN, Web Programming
            ['nip' => '198812032020121001', 'email' => 'mua@pens.ac.id', 'nama' => 'Mu\'arifin, S.ST., M.T.', 'alias' => 'Pak Mu\'a', 'bebanMengajar' => '16', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Soft Computation, Web Programming
            ['nip' => '199609072020122007', 'email' => 'nai@pens.ac.id', 'nama' => 'Nailussa\'ada, S.ST., M.Tr.Kom.', 'alias' => 'Bu Nai', 'bebanMengajar' => '6', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Software Engineering
            ['nip' => '197111091998022001', 'email' => 'nana@pens.ac.id', 'nama' => 'Nana Ramadijanti, S.Kom., M.Kom.', 'alias' => 'Bu Nana', 'bebanMengajar' => '5', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Computer Vision, Image Processing
            ['nip' => '197403182001121005', 'email' => 'rosyid@pens.ac.id', 'nama' => 'Nur Rosyid Mubtadai, S.Kom., M.T.', 'alias' => 'Pak Rosyid', 'bebanMengajar' => '12', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Software Engineering
            ['nip' => '198105082005011002', 'email' => 'rengga@pens.ac.id', 'nama' => 'Rengga Asmara, S.Kom., M.T.', 'alias' => 'Pak Rengga', 'bebanMengajar' => '13', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Database, Information System
            ['nip' => '198607032009122004', 'email' => 'disa@pens.ac.id', 'nama' => 'Rosiyah Faradisa S.Si., M.Si.', 'alias' => 'Bu Disa', 'bebanMengajar' => '8', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Math Education
            ['nip' => '197009142001122001', 'email' => 'tessy@pens.ac.id', 'nama' => 'Tessy Badriyah, S.Kom., M.T., Ph.D.', 'alias' => 'Bu Tessy', 'bebanMengajar' => '8', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Database
            ['nip' => '199210122018032001', 'email' => 'lely@pens.ac.id', 'nama' => 'Tri Hadiah Muliawati, S.ST., M.Kom.', 'alias' => 'Bu Lely', 'bebanMengajar' => '6', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Soft Computation
            ['nip' => '197404162000032003', 'email' => 'umi@pens.ac.id', 'nama' => 'Umi Sa\'adah, S.Kom., M.Kom.', 'alias' => 'Bu Umi', 'bebanMengajar' => '18', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Software Engineering
            ['nip' => '197911212005011003', 'email' => 'moko@pens.ac.id', 'nama' => 'Wiratmoko Yuwono, S.T., M.T.', 'alias' => 'Pak Moko', 'bebanMengajar' => '16', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Database, Web Pogramming
            ['nip' => '198801062019031009', 'email' => 'yanuar@pens.ac.id', 'nama' => 'Yanuar Risah Prayogi S.Kom., M.Kom.', 'alias' => 'Pak Yanuar', 'bebanMengajar' => '5', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')],	//Mobile Apps, Web Programming
            ['nip' => '197807062002122003', 'email' => 'yuli@pens.ac.id', 'nama' => 'Yuliana Setiowati, S.Kom., M.Kom.', 'alias' => 'Bu Yuli', 'bebanMengajar' => '9', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]	//Programming
        ]);

        
        User::insert([
            ['nip' => '0', 'nama' => 'Admin', 'alias' => 'Admin', 'email' => 'admin@sks-pens.site', 'role' => '1', 'password' => '$2y$10$P1cEQWYjiF4eiaKc04c/he4c3bWzQ9gMyvcsieJjsdW04jhmIUkqu'],
        ]);
        
        //developer
        User::insert([
            ['nip' => '3120500011', 'nama' => 'Mohammad Arief Darmawan', 'alias' => 'Arief', 'email' => 'arief.d2202@gmail.com', 'role' => '1', 'password' => '$2y$10$P1cEQWYjiF4eiaKc04c/he4c3bWzQ9gMyvcsieJjsdW04jhmIUkqu'],
            ['nip' => '3120500021', 'nama' => 'Ade Bayu Budiono', 'alias' => 'Ade', 'email' => 'adebayubudiono@it.student.pens.ac.id', 'role' => '1', 'password' => '$2y$10$GL/ZviqnLhgpwaBGNfioee.5hkpZHV97BO2riRw0R3S1WSnM5HVda'],
            ['nip' => '3120500009', 'nama' => 'Rayhan Munir Wibowo', 'alias' => 'Rayhan', 'email' => 'rayhan439@gmail.com', 'role' => '1', 'password' => '$2y$10$9vZ1O4EEEptVYiUcRXIQoOBoBiAuD6Y1yDv2Ev5ThGqyJfFzhr8G6'],
            ['nip' => '3120500029', 'nama' => 'Farhan Izzudin Az Zufar', 'alias' => 'Farhan', 'email' => 'farhanizzaz@gmail.com', 'role' => '1', 'password' => '$2y$10$f43JzdIy4RAlH3Gl6iPfBu5Jar1TG2nlDrM4cqOzQcVsjwyZ5Swn2'],
            ['nip' => '3120500012', 'nama' => 'Madani Sofi Arina Hanif', 'alias' => 'Ayin', 'email' => 'ayinmadani@gmail.com', 'role' => '1', 'password' => '$2y$10$JUUKFmyB9pWCIAcTjC12QOT5XdV7t8peTA3.zbNvaUUj.pwGwBVq.']
        ]);
    }
}
