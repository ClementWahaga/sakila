<?php
film::findAll()
?>

<?php foreach ($films as $film) : ?>

    <div class="card mb-1">
        <div class="card-header">
            <strong><?= $film['title'] ?> (sorti en <?= $film['release_year'] ?>)</strong>
        </div>
        <div class="card-body">
            <?= $film['description'] ?>
        </div>
        <div class="card-footer">
            <em>Durée du film : <?= $film['length'] ?> minutes</em>
        </div>
    </div>

<?php endforeach; ?>