@extends('layouts.app')

@section('content')

<h2>Edit Appointment</h2>

<form action="{{ route('appointments.update', $appointment) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Patient</label>

        <select name="patient_id"
                class="form-control"
                required>

            @foreach($patients as $patient)

            <option value="{{ $patient->id }}"
                {{ $appointment->patient_id == $patient->id ? 'selected' : '' }}>

                {{ $patient->name }}

            </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Appointment Date</label>

        <input type="date"
               name="appointment_date"
               class="form-control"
               value="{{ $appointment->appointment_date }}"
               required>

    </div>

    <div class="mb-3">

        <label>Appointment Time</label>

        <input type="time"
               name="appointment_time"
               class="form-control"
               value="{{ $appointment->appointment_time }}"
               required>

    </div>

    <div class="mb-3">

        <label>Doctor</label>

        <input type="text"
               name="doctor"
               class="form-control"
               value="{{ $appointment->doctor }}"
               required>

    </div>

    <div class="mb-3">

        <label>Status</label>

        <select name="status"
                class="form-control">

            @foreach(['Pending', 'Confirmed', 'Completed', 'Cancelled'] as $status)

            <option value="{{ $status }}"
                {{ $appointment->status == $status ? 'selected' : '' }}>

                {{ $status }}

            </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Reason</label>

        <textarea name="reason"
                  class="form-control">{{ $appointment->reason }}</textarea>

    </div>

    <button class="btn btn-success">
        Update Appointment
    </button>

    <a href="{{ route('appointments.index') }}"
       class="btn btn-secondary">
        Cancel
    </a>

</form>

@endsection