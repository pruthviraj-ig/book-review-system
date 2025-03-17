<?= view('templates/header'); ?>

<div class="card">
    <div class="card-body">
        <h1 class="card-title"><?= esc($book['title']); ?></h1>
        <p class="card-text"><strong>Author:</strong> <?= esc($book['author']); ?></p>
        <p class="card-text"><strong>Genre:</strong> <?= esc($book['genre']); ?></p>
        <p class="card-text"><strong>ISBN:</strong> <?= esc($book['isbn']); ?></p>
        <a href="<?= base_url('/books'); ?>" class="btn btn-primary">← Back to Book List</a>
    </div>
</div>

<hr>

<h2>Reviews</h2>
<?php if (!empty($reviews)) : ?>
    <?php foreach ($reviews as $review) : ?>
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title"><?= esc($review['user_name']); ?> (<?= esc($review['rating']); ?>/5)</h5>
                <p class="card-text"><?= esc($review['review']); ?></p>
            </div>
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
        
        <div class="mb-3">
            <label class="form-label"><strong>Rating (1-5):</strong></label>
            <select name="rating" class="form-select" required>
                <option value="1">1 Star</option>
                <option value="2">2 Stars</option>
                <option value="3">3 Stars</option>
                <option value="4">4 Stars</option>
                <option value="5">5 Stars</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label"><strong>Your Review:</strong></label>
            <textarea name="review" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Submit Review</button>
    </form>
<?php else : ?>
    <p><a href="<?= base_url('/login'); ?>" class="btn btn-warning">Login to Submit a Review</a></p>
<?php endif; ?>

<?= view('templates/footer'); ?>
