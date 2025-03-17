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
    </style>
</head>
<body>

    <h1>Book List</h1>
    
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
