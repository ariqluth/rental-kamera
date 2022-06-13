<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Pemilik',
               'email'=>'pemilik@gmail.com',
                'hak_akses'=>'1',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Customer',
               'email'=>'customer@gmail.com',
                'hak_akses'=>'0',
               'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
