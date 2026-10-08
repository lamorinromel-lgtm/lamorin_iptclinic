@extends('layouts.app')

@section('content')

<h2>Edit Patient</h2>

<form action="{{ route('patients.update', $patient) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Name</label>

        <input type="text"
               name="name"
               class="form-control"
               value="{{ $patient->name }}"
               required>
    </div>

    <div class="mb-3">
        <label>Email</label>

        <input type="email"
               name="email"
               class="form-control"
               value="{{ $patient->email }}">
    </div>

    <div class="mb-3">
        <label>Phone</label>

        <input type="text"
               name="phone"
               class="form-control"
               value="{{ $patient->phone }}"
               required>
    </div>

    <div class="mb-3">
        <label>Address</label>

        <textarea name="address"
                  class="form-control">{{ $patient->address }}</textarea>
    </div>

    <div class="mb-3">
        <label>Birth Date</label>

        <input type="date"
               name="birth_date"
               class="form-control"
               value="{{ $patient->birth_date }}">
    </div>

    <div class="mb-3">
        <label>Gender</label>

        <select name="gender"
                class="form-control">

            <option value="Male"
                {{ $patient->gender == 'Male' ? 'selected' : '' }}>
                Male
            </option>

            <option value="Female"
                {{ $patient->gender == 'Female' ? 'selected' : '' }}>
                Female
            </option>

        </select>
    </div>

    <button class="btn btn-success">
        Update Patient
    </button>

    <a href="{{ route('patients.index') }}"
       class="btn btn-secondary">
        Cancel
    </a>

</form>

@endsection