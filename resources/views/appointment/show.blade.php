@extends('layouts.app')

@section('content')

<h2>Appointment Details</h2>

<div class="card">

    <div class="card-body">

        <p>
            <strong>Patient:</strong>
            {{ $appointment->patient->name }}
        </p>

        <p>
            <strong>Date:</strong>
            {{ $appointment->appointment_date }}
        </p>

        <p>
            <strong>Time:</strong>
            {{ $appointment->appointment_time }}
        </p>

        <p>
            <strong>Doctor:</strong>
            {{ $appointment->doctor }}
        </p>

        <p>
            <strong>Status:</strong>
            {{ $appointment->status }}
        </p>

        <p>
            <strong>Reason:</strong>
            {{ $appointment->reason }}
        </p>

        <a href="{{ route('appointments.edit', $appointment) }}"
           class="btn btn-warning">
            Edit
        </a>

        <a href="{{ route('appointments.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </div>

</div>

@endsection