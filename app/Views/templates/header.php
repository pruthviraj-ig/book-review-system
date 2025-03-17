<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Review System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/books'); ?>">Book Reviews</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <?php if (session()->get('user_id')) : ?>
                    <li class="nav-item"><a class="nav-link" href="#">Welcome, <?= esc(session()->get('user_name')); ?></a></li>
                    <li class="nav-item"><a class="nav-link btn btn-danger text-white" href="<?= base_url('/logout'); ?>">Logout</a></li>
                <?php else : ?>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/login'); ?>">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/register'); ?>">Register</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
