<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('azertyui'),
                'remember_token' => null,
            ],
            [
                
                'name'           => 'User',
                'email'          => 'user@user.com',
                'password'       => bcrypt('azertyui'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
