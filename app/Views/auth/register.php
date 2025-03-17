<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 400px; margin: auto; }
        h2 { text-align: center; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Register</h2>
        
        <?php if (session()->getFlashdata('success')): ?>
            <p style="color: green;"><?= session()->getFlashdata('success'); ?></p>
        <?php endif; ?>

        <form action="<?= base_url('/register'); ?>" method="post">
            <p><strong>Name:</strong></p>
            <input type="text" name="name" required>
            
            <p><strong>Email:</strong></p>
            <input type="email" name="email" required>
            
            <p><strong>Password:</strong></p>
            <input type="password" name="password" required>
            
            <br><br>
            <button type="submit">Register</button>
        </form>
        
        <p>Already have an account? <a href="<?= base_url('/login'); ?>">Login here</a></p>
    </div>

</body>
</html>
