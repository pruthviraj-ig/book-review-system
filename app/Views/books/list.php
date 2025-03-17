<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        .logout-btn {
            padding: 5px 10px;
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Book List</h1>
        <div>
            <?php if (session()->get('user_id')) : ?>
                <span>Welcome, <?= esc(session()->get('user_name')); ?> | </span>
                <a class="logout-btn" href="<?= base_url('/logout'); ?>">Logout</a>
            <?php else : ?>
                <a href="<?= base_url('/login'); ?>">Login</a> | 
                <a href="<?= base_url('/register'); ?>">Register</a>
            <?php endif; ?>
        </div>
    </div>
    
    <table>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>ISBN</th>
        </tr>
        <?php if (!empty($books)) : ?>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><a href="<?= base_url('/books/details/' . $book['id']); ?>"><?= esc($book['title']); ?></a></td>
                    <td><?= esc($book['author']); ?></td>
                    <td><?= esc($book['genre']); ?></td>
                    <td><?= esc($book['isbn']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="4">No books found.</td>
            </tr>
        <?php endif; ?>
    </table>

</body>
</html>
