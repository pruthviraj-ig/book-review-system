<?= view('templates/header'); ?>

<h1 class="text-center mb-4">Book List</h1>

<div class="row">
    <?php if (!empty($books)) : ?>
        <?php foreach ($books as $index => $book): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?= base_url('/books/details/' . $book['id']); ?>" class="text-decoration-none">
                                <?= esc($book['title']); ?>
                            </a>
                        </h5>
                        <p class="card-text"><strong>Author:</strong> <?= esc($book['author']); ?></p>
                        <p class="card-text"><strong>Genre:</strong> <?= esc($book['genre']); ?></p>
                        <p class="card-text"><strong>ISBN:</strong> <?= esc($book['isbn']); ?></p>
                        <a href="<?= base_url('/books/details/' . $book['id']); ?>" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>

            <!-- New row after every 3 books -->
            <?php if (($index + 1) % 3 == 0): ?>
                </div><div class="row">
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else : ?>
        <p class="text-center">No books found.</p>
    <?php endif; ?>
</div>

<?= view('templates/footer'); ?>
