@extends('layouts.app')

@section('content')

<h2>Patient Details</h2>

<div class="card">

    <div class="card-body">

        <h4>{{ $patient->name }}</h4>

        <p>
            <strong>Email:</strong>
            {{ $patient->email }}
        </p>

        <p>
            <strong>Phone:</strong>
            {{ $patient->phone }}
        </p>

        <p>
            <strong>Address:</strong>
            {{ $patient->address }}
        </p>

        <p>
            <strong>Birth Date:</strong>
            {{ $patient->birth_date }}
        </p>

        <p>
            <strong>Gender:</strong>
            {{ $patient->gender }}
        </p>

        <a href="{{ route('patients.edit', $patient) }}"
           class="btn btn-warning">
            Edit
        </a>

        <a href="{{ route('patients.index') }}"
           class="btn btn-secondary">
            Back
        </a>

    </div>

</div>

@endsection
