<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | GSA Production</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">GSA Admin</a>
        @auth
        <div class="ms-auto d-flex gap-2 align-items-center">
            <a class="btn btn-sm btn-outline-light" href="{{ route('home') }}" target="_blank">View Site</a>
            <form method="POST" action="{{ route('admin.logout') }}">@csrf<button class="btn btn-sm btn-warning">Logout</button></form>
        </div>
        @endauth
    </div>
</nav>
<main class="container py-4">
    @if(session('status'))<div class="alert alert-success">{{ session('status') }}</div>@endif
    @yield('content')
</main>
</body>
</html>
