<?php
$movie = new film($film_id='',$title='',$descritpion='',$release_year='',$language_id='',$original_language_id='',$rental_duration='',$lenght='',$replacement_cost='',$special_features='',$last_update='');
$movie->findAll();

//var_dump($movie->findAll())
?>

<?php foreach ($movie->findAll() as $data) : ?>

    <div class="card mb-1">
        <div class="card-header">
            <strong><?= $data->title ?> (sorti en <?= $data-> release_year ?>)</strong>
        </div>
        <div class="card-body">
            <?= $data->description?>
        </div>
        <div class="card-footer">
            <em>Durée du film : <?= $data->length ?> minutes</em>
        </div>
    </div>

<?php endforeach; ?>