<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('patient')
            ->latest()
            ->get();

        return view('appointments.index', compact('appointments'));
    }

    public function create()
    {
        $patients = Patient::orderBy('name')->get();

        return view('appointments.create', compact('patients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'doctor' => 'required|string|max:255',
            'status' => 'required|string',
            'reason' => 'nullable|string'
        ]);

        Appointment::create($request->all());

        return redirect()
            ->route('appointments.index')
            ->with('success', 'Appointment added successfully.');
    }

    public function show(Appointment $appointment)
    {
        $appointment->load('patient');

        return view('appointments.show', compact('appointment'));
    }

    public function edit(Appointment $appointment)
    {
        $patients = Patient::orderBy('name')->get();

        return view('appointments.edit', compact(
            'appointment',
            'patients'
        ));
    }

    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'doctor' => 'required|string|max:255',
            'status' => 'required|string',
            'reason' => 'nullable|string'
        ]);

        $appointment->update($request->all());

        return redirect()
            ->route('appointments.index')
            ->with('success', 'Appointment updated successfully.');
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()
            ->route('appointments.index')
            ->with('success', 'Appointment deleted successfully.');
    }
}