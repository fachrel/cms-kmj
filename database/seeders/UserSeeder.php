<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'username' => 'admin',
            'name' => 'admin',
            'password' => Hash::make('admin'),
        ]);
        $admin->assignRole('admin');

        $user1 = User::create([
            'username' => 'user',
            'name' => 'Fachrel Razka Pramudya',
            'password' => Hash::make('user'),
        ]);
        $user1->assignRole('kontributor');
    }
}
