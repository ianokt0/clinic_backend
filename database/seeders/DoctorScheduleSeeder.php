<?php

namespace Database\Seeders;

use App\Models\Doctor\Doctor;
use App\Models\Doctor\DoctorSchedule;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::all()->each(function ($doctor) {
            DoctorSchedule::factory()->count(3)->create([
                'doctor_id' => $doctor->id,
            ]);
        });
    }
}
