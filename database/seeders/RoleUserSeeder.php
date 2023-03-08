<?php

namespace Database\Seeders;

use App\Models\RoleUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [  'name' =>'Pimpinan', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s') ],
            [  'name' => 'Admin', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s') ],
            [  'name' => 'Karyawan', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s') ],
            [  'name' => 'Client', 'created_at' => date('Y-m-d h:i:s'), 'updated_at' => date('Y-m-d h:i:s') ],
        ];

        RoleUser::insert($role);
    }
}
