<?php

namespace App\Models\Doctor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSchedule extends Model
{
    use HasFactory;

    public $guarded = [];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
