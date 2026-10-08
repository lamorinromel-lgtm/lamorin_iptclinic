@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h2>Appointments</h2>

    <a href="{{ route('appointments.create') }}"
       class="btn btn-primary">
        + Add Appointment
    </a>

</div>

<table class="table table-bordered table-striped">

    <thead class="table-dark">

        <tr>
            <th>ID</th>
            <th>Patient</th>
            <th>Date</th>
            <th>Time</th>
            <th>Doctor</th>
            <th>Status</th>
            <th width="250">Actions</th>
        </tr>

    </thead>

    <tbody>

        @forelse($appointments as $appointment)

        <tr>

            <td>{{ $appointment->id }}</td>

            <td>
                {{ $appointment->patient->name }}
            </td>

            <td>
                {{ $appointment->appointment_date }}
            </td>

            <td>
                {{ $appointment->appointment_time }}
            </td>

            <td>
                {{ $appointment->doctor }}
            </td>

            <td>
                <span class="badge bg-info">
                    {{ $appointment->status }}
                </span>
            </td>

            <td>

                <a href="{{ route('appointments.show', $appointment) }}"
                   class="btn btn-info btn-sm">
                    View
                </a>

                <a href="{{ route('appointments.edit', $appointment) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('appointments.destroy', $appointment) }}"
                      method="POST"
                      class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Delete this appointment?')">
                        Delete
                    </button>

                </form>

            </td>

        </tr>

        @empty

        <tr>
            <td colspan="7"
                class="text-center">
                No appointments found.
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection