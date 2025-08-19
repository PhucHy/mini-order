<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;


class RoleSeeder extends Seeder
{
    
    public function run(): void
    {
        $admin = Role::firstOrCreate(['name' => 'Admin']);
        $staff = Role::firstOrCreate(['name' => 'Staff']);

        $user1 = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            ['name' => 'Admin', 'password' => bcrypt('230300')]
        );
        $user1->assignRole('Admin');

        $user2 = User::firstOrCreate(
            ['email' => 'staff@gmail.com'],
            ['name' => 'Staff', 'password' => bcrypt('123456789')]
        );
        $user2->assignRole('Staff');
    }
}
