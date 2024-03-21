<?php

namespace App\Models\Doctor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public $guarded = [];

    public function doctor_schedules()
    {
        return $this->hasMany(DoctorSchedule::class);
    }
}
