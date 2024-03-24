<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Doctor\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\DoctorScheduleSeeder;
use Database\Seeders\Patient\PatientSeeder;

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
        Doctor::factory(30)->create();
        Doctor::factory()->create([
            'doctor_name' => 'Dr.Vapor',
            'doctor_specialist' => 'Vaporista',
            'doctor_phone' => '082513245678',
            'doctor_email' => 'dr.vapor@gmail.com',
            'photo' => 'https://source.unsplash.com/random?face',
            'address' => 'Jl.Ahmad Dahlan No.15 Yogyakarta',
            'sip' => 'Dokter/Dokter Gigi/Dokter Spesialis',
            'nik' => '3304520354452',
        ]);
        $this->call([
            DoctorScheduleSeeder::class,
            PatientSeeder::class,
        ]);
    }
}
