<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Models\Doctor\Doctor;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Doctor\DoctorSchedule;

class DoctorScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $doctorSchedule = DoctorSchedule::with('doctor')
            ->when($request->input('doctor_id'), function ($query, $doctor_id) {
                return $query->where('doctor_id', $doctor_id);
            })
            ->orderBy('doctor_id', 'asc')
            ->paginate(10);
        return view('pages.doctors.doctor-schedule.index', compact('doctorSchedule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('pages.doctors.doctor-schedule.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'doctor_id' => 'required',
                'day' => 'required',
                'time' => 'required',
            ]);
            DoctorSchedule::create($request->except('_token'));
            DB::commit();
            return redirect()->route('doctor-schedule.index')->with('success', 'Berhasil menambah schedule doctor');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctorSchedule = DoctorSchedule::whereId($id)->first();
        $doctors = Doctor::all();
        return view('pages.doctors.doctor-schedule.edit', compact('doctorSchedule', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'doctor_id' => 'required',
                'day' => 'required',
                'time' => 'required',
            ]);

            $doctorSchedulte = DoctorSchedule::where('id', $id)->lockForUpdate()->first();
            $doctorSchedulte->update($request->except('_token'));
            DB::commit();
            return redirect()->route('doctor-schedule.index')->with('success', 'Berhasil update schedule doctor');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $doctorSchedule = DoctorSchedule::whereId($id)->lockForUpdate()->first();
            $doctorSchedule->delete();
            DB::commit();
            return redirect()->route('doctor-schedule.index')->with('success', 'Berhasil hapus schedule doctor');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
