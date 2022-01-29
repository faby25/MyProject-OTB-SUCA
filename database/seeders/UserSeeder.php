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
    public function run()
    {

        $user1 = User::create([
        'ci'=>'1111110',
        'username'=>'Admin',
        'name' => 'Admin',
        'lastnameM' =>'OTB',
        'lastnameF' =>'SUCA',
        'telf' =>'1234567',
        'email' => 'AdminOTB@gmail.com',
        'email_verified_at' => now(),
        'password' =>bcrypt('password'),
        'is_admin'=>'1',
        'remember_token' => '1'
        ]);
        $user1->assignRole('Admin');

        $user2 = User::create([
        'ci'=>'1111112',
        'username'=>'Cajero',
        'name' => 'Cajero',
        'lastnameM' =>'OTB',
        'lastnameF' =>'SUCA',
        'telf' =>'1234567',
        'email' => 'CajeroOTB@gmail.com',
        'email_verified_at' => now(),
        'password' =>bcrypt('password'),
        'is_admin'=>'1',
        'remember_token' => '2'
        ]);
        $user2->assignRole('Cajero');

        $user3 = User::create([
        'ci'=>'1111113',
        'username'=>'Lecturador',
        'name' => 'Lecturador',
        'lastnameM' =>'OTB',
        'lastnameF' =>'SUCA',
        'telf' =>'1234567',
        'email' => 'LecturadorOTB@gmail.com',
        'email_verified_at' => now(),
        'password' =>bcrypt('password'),
        'is_admin'=>'1',
        'remember_token' => '3'
        ]);
        $user3->assignRole('Lecturador');
    }
}
