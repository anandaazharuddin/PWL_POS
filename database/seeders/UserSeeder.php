<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
   
    public function run(): void
    {
        $data = [

            [        
                'user_id' => 1,
                'level_id' => 1,
                'username' => 'admin',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 2,
                'level_id' => 2,
                'username' => 'manager',
                'nama' => 'Manager',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 3,
                'level_id'=> 3,
                'username'=> 'staff',
                'nama'=> 'Manager',
                'password'=> Hash::make('12345'),

            ],
            [        
                'user_id' => 4,
                'level_id' => 4,
                'username' => 'yanto',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 5,
                'level_id' => 5,
                'username' => 'yanti',
                'nama' => 'Manager',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 6,
                'level_id'=> 6,
                'username'=> 'yantus',
                'nama'=> 'Manager',
                'password'=> Hash::make('12345'),

            ],    
            [        
                'user_id' => 7,
                'level_id' => 7,
                'username' => 'yaman',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 8,
                'level_id' => 8,
                'username' => 'yadi',
                'nama' => 'Manager',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 9,
                'level_id'=> 9,
                'username'=> 'yoda',
                'nama'=> 'Manager',
                'password'=> Hash::make('12345'),

            ],
            [        
                'user_id' => 10,
                'level_id' => 10,
                'username' => 'yuda',
                'nama' => 'Administrator',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 11,
                'level_id' => 11,
                'username' => 'yidi',
                'nama' => 'Manager',
                'password' => Hash::make('12345'),
            ],
            [
                'user_id' => 12,
                'level_id'=> 12,
                'username'=> 'yudu',
                'nama'=> 'Manager',
                'password'=> Hash::make('12345'),

            ],    
        
        ];
        DB::table('m_user')->insert($data);




    }
}
