<?php
$movie = new film($film_id='',$title='',$descritpion='',$release_year='',$language_id='',$original_language_id='',$rental_duration='',$lenght='',$replacement_cost='',$special_features='',$last_update='');
?>

<div class="container">
    <?php foreach ($movie->findAll() as $data) : ?>
        <a href="index.php?p=single<?= $_GET['$film_id']; ?>">
            <div class="neuro">
                <i class="fas fa-film"></i>
                <p><?= $data->title ?> </p>
                <p>sorti en <?= $data-> release_year ?></p>
                <p> <?= $data->description?></p>
                <em>Durée du film : <?= $data->length ?> minutes</em>
            </div>
        </a>
    <?php endforeach; ?>
</div>