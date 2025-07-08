<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Admin Dashboard</span>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="btn btn-outline-light" type="submit">Logout</button>
        </form>
    </div>
</nav>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h3 class="card-title">Welcome, Admin!</h3>
            <p class="card-text">You are logged into the admin panel.</p>

            <!-- Add admin-specific content or links here -->
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
