<?php
$movie = new film($film_id='',$title='',$descritpion='',$release_year='',$language_id='',$original_language_id='',$rental_duration='',$lenght='',$replacement_cost='',$special_features='',$last_update='');
$movie->findAll();

//var_dump($movie->findAll())
?>
<div class="container">
    <?php foreach ($movie->findAll() as $data) : ?>

        <!-- <div class="card mb-1">
            <div class="card-header">
                <strong><?= $data->title ?> (sorti en <?= $data-> release_year ?>)</strong>
            </div>
            <div class="card-body">
                <?= $data->description?>
            </div>
            <div class="card-footer">
                <em>Durée du film : <?= $data->length ?> minutes</em>
            </div>
        </div> -->

        <div class="neuro">
            <i class="fas fa-film"></i>
            <p><?= $data->title ?> </p>
            <p>sorti en <?= $data-> release_year ?></p>
            <p> <?= $data->description?></p>
            <em>Durée du film : <?= $data->length ?> minutes</em>
        </div>

    <?php endforeach; ?>
</div>