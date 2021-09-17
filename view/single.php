<?php  
$movie = new film($film_id='',$title='',$descritpion='',$release_year='',$language_id='',$original_language_id='',$rental_duration='',$lenght='',$replacement_cost='',$special_features='',$last_update='');
?>



<div class="neuro">
    <i class="fas fa-film"></i>
    <p><?= $movie->findOne($film_id) ?> </p>
    <p>sorti en <?= $movie-> release_year ?></p>
    <p> <?= $movie->description?></p>
    <em>Durée du film : <?= $movie->length ?> minutes</em>
</div>

