<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //role 
            $adminRole = new Role();
            $adminRole->name = "Admin";
            $adminRole->display_name = "Admin";
            $adminRole->save();

            $userRole = new Role();
            $userRole->name = "User";
            $userRole->display_name = "User";
            $userRole->save();

        // Make sample user
            $admin = new User();
            $admin->name = 'Admin';
            $admin->email = 'admin@grtech.com.my';
            $admin->password = bcrypt('password');
            $admin->save();
            $admin->attachRole($adminRole);

            $user = new User();
            $user->name = 'User';
            $user->email = 'user@grtech.com.my';
            $user->password = bcrypt('password');
            $user->save();
            $admin->attachRole($userRole);
    }
}
