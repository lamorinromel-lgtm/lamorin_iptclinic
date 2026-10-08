@extends('layouts.app')

@section('content')

<h2>Add Appointment</h2>

<form action="{{ route('appointments.store') }}"
      method="POST">

    @csrf

    <div class="mb-3">

        <label>Patient</label>

        <select name="patient_id"
                class="form-control"
                required>

            <option value="">
                Select Patient
            </option>

            @foreach($patients as $patient)

            <option value="{{ $patient->id }}">
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
               required>

    </div>

    <div class="mb-3">

        <label>Appointment Time</label>

        <input type="time"
               name="appointment_time"
               class="form-control"
               required>

    </div>

    <div class="mb-3">

        <label>Doctor</label>

        <input type="text"
               name="doctor"
               class="form-control"
               placeholder="Dr. Juan Dela Cruz"
               required>

    </div>

    <div class="mb-3">

        <label>Status</label>

        <select name="status"
                class="form-control">

            <option value="Pending">
                Pending
            </option>

            <option value="Confirmed">
                Confirmed
            </option>

            <option value="Completed">
                Completed
            </option>

            <option value="Cancelled">
                Cancelled
            </option>

        </select>

    </div>

    <div class="mb-3">

        <label>Reason</label>

        <textarea name="reason"
                  class="form-control"></textarea>

    </div>

    <button class="btn btn-primary">
        Save Appointment
    </button>

    <a href="{{ route('appointments.index') }}"
       class="btn btn-secondary">
        Cancel
    </a>

</form>

@endsection