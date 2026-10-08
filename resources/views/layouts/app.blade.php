<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Clinic Management System</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-dark bg-primary">
    <div class="container">

        <a class="navbar-brand"
           href="{{ route('patients.index') }}">
            Clinic Management System
        </a>

        <div>
            <a href="{{ route('patients.index') }}"
               class="btn btn-light btn-sm">
                Patients
            </a>

            <a href="{{ route('appointments.index') }}"
               class="btn btn-light btn-sm">
                Appointments
            </a>
        </div>

    </div>
</nav>

<div class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>