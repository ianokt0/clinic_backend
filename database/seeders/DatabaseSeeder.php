<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ian Oktafian',
            'email' => 'ian@inclinic.com',
            'role' => 'admin',
            'password' => Hash::make('123456'),
            'phone' => '0821354350',
        ]);
    }
}
