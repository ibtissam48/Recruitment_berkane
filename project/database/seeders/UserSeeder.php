<?php

namespace Database\Seeders;

use App\Models\User;
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
        /* create admin, author and user */
        /* password for these users is password */

        $factoryUsers = [
            [
                'first_name' => 'admin user',
                'last_name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone_number'=>'0612131415',
                'role' => 'admin'
            ],

            [
                'first_name' => 'recruteur user',
                'last_name' => 'recruteur',
                'email' => 'author@author.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone_number'=>'0632131415',
                'role' => 'author'
            ],

            [
                'first_name' => 'Candidat',
                'last_name' => 'user_simple',
                'email' => 'user@user.com',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'phone_number'=>'0642131415',
                'role' => 'user'
            ],
        ];

        foreach ($factoryUsers as $user) {
            $newUser =  User::factory()->create([
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'email' => $user['email'],
                'phone_number'=>$user['phone_number'],
                'password' => $user['password'],
            ]);
            $newUser->assignRole($user['role']);
        }
    }
}
