<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class User extends Seeder
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
               'name'=>'Admin',
               'email'=>'admin@simtu.com',
                'role'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Tatausaha',
                'email'=>'tu@simtu.com',
                 'role'=>'tatausaha',
                'password'=> bcrypt('123456'),
             ],
             [
                'name'=>'Kepsek',
                'email'=>'kepsek@simtu.com',
                 'role'=>'kepsek',
                'password'=> bcrypt('123456'),
             ],
            
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
