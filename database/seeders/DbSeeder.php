<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // User::truncate();
      // Category::truncate();

      \DB::table('users')->insert([
        'ci'=>'0000001',
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
      \DB::table('users')->insert([

        'ci'=>'0000002',
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
      \DB::table('users')->insert([
        'ci'=>'0000003',
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


        // $user=User::factory(10)->create();
        // Category::factory(4)->create();

        // [
        //   'name'=>'john;'
        // ]);
        // Post::factory(5)->create([
        //   'user_id'=>$user->id
        // ]);


    }
}
