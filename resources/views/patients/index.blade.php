@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Patients</h2>

    <a href="{{ route('patients.create') }}"
       class="btn btn-primary">
        + Add Patient
    </a>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        Please check your input.
    </div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->phone }}</td>
                <td>{{ $patient->gender }}</td>
                <td>
                    <a href="{{ route('patients.show', $patient) }}"
                       class="btn btn-info btn-sm">
                        View
                    </a>

                    <a href="{{ route('patients.edit', $patient) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('patients.destroy', $patient) }}"
                          method="POST"
                          class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Delete this patient?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">
                    No patients found. Click Add Patient to begin.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection