<?php

$listActor = new actor($actor_id='',$first_name='',$last_name='');
$listActor->findAll();


//var_export ($listActor);
?>

<?php foreach ($listActor->findAll() as $data) : ?>

    <div class="card mb-1">
        <div class="card-header">
            <strong><?= $data->first_name ?> <?= $data->last_name?></strong>
        </div>
    </div>

<?php endforeach; ?>