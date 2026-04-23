<!DOCTYPE html>
<html>
<head>
    <title>Campus Service Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">ServiceHub</a>

        <div>
            <?php if(isset($_SESSION['user'])): ?>
                <a href="dashboard.php" class="btn btn-light">Dashboard</a>
                <a href="auth/logout.php" class="btn btn-danger">Logout</a>
            <?php else: ?>
                <a href="auth/login.php" class="btn btn-light">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<div class="container mt-4">