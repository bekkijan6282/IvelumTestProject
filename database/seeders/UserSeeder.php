<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        User::truncate();
        Role::truncate();
        $roles = ['Admin', 'Customer'];

        foreach($roles as $role) {
            $r = Role::create(['name' => $role]);
        }
        User::create([
            'full_name' => 'Admin',
            'role_id' => 1,
            'phone_number' => '998931234567',
            'password' => bcrypt(123456789),
        ]);
        User::create([
            'full_name' => 'Customer 1',
            'role_id' => 2,
            'phone_number' => '998937654321',
            'password' => bcrypt(123456789),
        ]);
    }
}
