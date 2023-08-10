<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'nomor' => '082346739790',
            'password' => bcrypt('rahasia'),
            'jenis_kelamin' => 'laki'
       ];
       User::create($user);

    }
}
