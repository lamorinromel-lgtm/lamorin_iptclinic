@extends('layouts.app')

@section('content')

<h2>Add Patient</h2>

<form action="{{ route('patients.store') }}"
      method="POST">

    @csrf

    <div class="mb-3">
        <label>Name</label>

        <input type="text"
               name="name"
               class="form-control"
               value="{{ old('name') }}"
               required>
    </div>

    <div class="mb-3">
        <label>Email</label>

        <input type="email"
               name="email"
               class="form-control"
               value="{{ old('email') }}">
    </div>

    <div class="mb-3">
        <label>Phone</label>

        <input type="text"
               name="phone"
               class="form-control"
               value="{{ old('phone') }}"
               required>
    </div>

    <div class="mb-3">
        <label>Address</label>

        <textarea name="address"
                  class="form-control">{{ old('address') }}</textarea>
    </div>

    <div class="mb-3">
        <label>Birth Date</label>

        <input type="date"
               name="birth_date"
               class="form-control"
               value="{{ old('birth_date') }}">
    </div>

    <div class="mb-3">
        <label>Gender</label>

        <select name="gender"
                class="form-control">

            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>

        </select>
    </div>

    <button class="btn btn-primary">
        Save Patient
    </button>

    <a href="{{ route('patients.index') }}"
       class="btn btn-secondary">
        Cancel
    </a>

</form>

@endsection