<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [  'name' =>'teknisi-listrik', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s') ],
            [  'name' => 'teknisi-mesin', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s') ],
            [  'name' => 'IT-Support', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s') ],
        ];

        Role::insert($role);
    }
}
