<?php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Models\Patient\Patient;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $patients = Patient::when($request->input('nik'), function ($query, $nik) {
            return $query->where('nik', 'like', '%' . $nik . '%');
        })
            ->paginate(10);
        return view('pages.patient.index', compact('patients'));
    }

    // create
    public function create()
    {
        return view('pages.patient.create');
    }

    // store
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        Patient::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('patient.index')->with('success', 'Patient created successfully');
    }
}
