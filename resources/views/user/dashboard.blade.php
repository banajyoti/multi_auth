<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <span class="navbar-brand">User Dashboard</span>
        <form method="POST" action="{{ route('logout') }}" class="d-flex">
            @csrf
            <button type="submit" class="btn btn-outline-light">Logout</button>
        </form>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title">Welcome, {{ Auth::user()->name ?? 'User' }}!</h3>
            <p class="card-text">You are logged into your user dashboard.</p>

            <!-- Add any additional user-specific content or links here -->
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
