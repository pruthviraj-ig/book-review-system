<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($book['title']); ?> - Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        .review-box {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1><?= esc($book['title']); ?></h1>
        <p><strong>Author:</strong> <?= esc($book['author']); ?></p>
        <p><strong>Genre:</strong> <?= esc($book['genre']); ?></p>
        <p><strong>ISBN:</strong> <?= esc($book['isbn']); ?></p>

        <br>
        <a href="<?= base_url('/books'); ?>">← Back to book list</a>

        <hr>

        <h2>Reviews</h2>
        <?php if (!empty($reviews)) : ?>
            <?php foreach ($reviews as $review) : ?>
                <div class="review-box">
                    <p><strong><?= esc($review['user_name']); ?></strong> (<?= esc($review['rating']); ?>/5)</p>
                    <p><?= esc($review['review']); ?></p>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No reviews yet. Be the first to review!</p>
        <?php endif; ?>

        <hr>

        <?php if (session()->get('user_id')) : ?>
            <h2>Submit a Review</h2>
            <form action="<?= base_url('/books/submit-review'); ?>" method="post">
                <input type="hidden" name="book_id" value="<?= esc($book['id']); ?>">
                <p><strong>Rating (1-5):</strong></p>
                <select name="rating" required>
                    <option value="1">1 Star</option>
                    <option value="2">2 Stars</option>
                    <option value="3">3 Stars</option>
                    <option value="4">4 Stars</option>
                    <option value="5">5 Stars</option>
                </select>

                <p><strong>Your Review:</strong></p>
                <textarea name="review" required></textarea>

                <br><br>
                <button type="submit">Submit Review</button>
            </form>
        <?php else : ?>
            <p><a href="<?= base_url('/login'); ?>">Login</a> to submit a review.</p>
        <?php endif; ?>

    </div>

</body>
</html>
