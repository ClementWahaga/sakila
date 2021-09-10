<?php

$categories = new category($category_id,$name);
$categories->findAll();


//var_export ($categories);
?>

<?php foreach ($categories->findAll() as $data) : ?>

    <div class="card mb-1">
        <div class="card-header">
            <strong><?= $data->name ?></strong>
        </div>
    </div>

<?php endforeach; ?>