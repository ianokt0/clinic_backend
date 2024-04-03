<?php

namespace App\Http\Controllers\Api\Doctor;

use Illuminate\Http\Request;
use App\Models\Doctor\Doctor;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Doctor\DoctorSchedule;

class DoctorController extends Controller
{
    public function index(Request $request)
    {
        $doctors = DB::table('doctors')
            ->when($request->input('name'), function ($query, $doctor_name) {
                return $query->where('doctor_name', 'like', '%' . $doctor_name . '%');
            })
            ->orderBy('id', 'desc')
            ->get();

        return response()->json($doctors);
    }
    public function edit($id)
    {
        $doctor = Doctor::where('id', $id)->first();

        return response()->json($doctor);
    }
}
