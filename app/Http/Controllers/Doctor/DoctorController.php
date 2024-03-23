<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Models\Doctor\Doctor;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $doctors = DB::table('doctors')
            ->when($request->input('name'), function ($query, $doctor_name) {
                return $query->where('doctor_name', 'like', '%' . $doctor_name . '%');
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('pages.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'doctor_name' => 'required',
                'doctor_email' => 'required',
                'doctor_phone' => 'required',
                'doctor_specialist' => 'required',
                'sip' => 'required',
                'id_ihs' => 'required',
                'nik' => 'required',
                'address' => 'required',
            ]);

            $doctor = Doctor::create($request->except(['_token', 'photo']));

            //image
            if ($request->file('photo')) {
                $photo = $request->file('photo');
                $photo->storeAs('public/doctors', $doctor->id . '.' . $photo->getClientOriginalExtension());
                $doctor->update(
                    [
                        'photo' => 'storage/doctors/' . $doctor->id . '.' . $photo->getClientOriginalExtension()
                    ]
                );
            }

            DB::commit();
            return redirect()->route('doctor.index')->with('success', 'Berhasil Menambah Doctor');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $doctor = Doctor::where('id', $id)->first();
        return view('pages.doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doctor = Doctor::where('id', $id)->first();
        return view('pages.doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'doctor_name' => 'required',
                'doctor_email' => 'required',
                'doctor_phone' => 'required',
                'doctor_specialist' => 'required',
                'sip' => 'required',
                'id_ihs' => 'required',
                'nik' => 'required',
                'address' => 'required',
            ]);

            $doctor = Doctor::whereId($id)->lockForUpdate()->first();
            //image
            if ($request->file('photo')) {
                $photo = $request->file('photo');
                $photo->storeAs('public/doctors', $doctor->id . '.' . $photo->getClientOriginalExtension());
                $doctor->update(
                    [
                        'photo' => 'storage/doctors/' . $doctor->id . '.' . $photo->getClientOriginalExtension()
                    ]
                );
            }
            $doctor->update($request->except('_token', 'photo'));
            DB::commit();
            return redirect()->route('doctor.index')->with('success', 'Berhasil Update Doctor');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $doctor = Doctor::whereId($id)->lockForUpdate()->first();
            $doctor->delete();
            DB::commit();
            return redirect()->route('doctor.index')->with('success', 'Berhasil Hapus Doctor');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
