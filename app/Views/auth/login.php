<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 400px; margin: auto; }
        h2 { text-align: center; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Login</h2>

        <?php if (session()->getFlashdata('error')): ?>
            <p style="color: red;"><?= session()->getFlashdata('error'); ?></p>
        <?php endif; ?>

        <form action="<?= base_url('/login'); ?>" method="post">
            <p><strong>Email:</strong></p>
            <input type="email" name="email" required>

            <p><strong>Password:</strong></p>
            <input type="password" name="password" required>

            <br><br>
            <button type="submit">Login</button>
        </form>

        <p>Don't have an account? <a href="<?= base_url('/register'); ?>">Register here</a></p>
    </div>

</body>
</html>
