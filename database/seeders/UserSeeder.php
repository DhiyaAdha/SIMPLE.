<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name'              => 'nurul',
                'email'             => 'nurul@gmail.com',
                'password'          => Hash::make('12345678'),
                'remember_token'    => NULL,
                'role_user_id'           => 1,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
            [
                'name'              => 'Manda',
                'email'             => 'manda@gmail.com',
                'password'          => Hash::make('12345678'),
                'remember_token'    => NULL,
                'role_user_id'              => 2,
                'created_at'        => date('Y-m-d h:i:s'),
                'updated_at'        => date('Y-m-d h:i:s'),
            ],
        ];

        User::insert($user);

    }
}
