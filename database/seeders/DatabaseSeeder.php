<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'admin'
        ]);
        User::create([
            'nik' => '1111111111111111',
            'name' => 'Guru',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'guru'
        ]);
        User::create([
            'nis' => '222222222',
            'name' => 'Siswa',
            'email' => 'siswa@gmail.com',
            'password' => bcrypt('123'),
            'class' => '12 RPL 1',
            'role' => 'siswa'
        ]);
    }
}
