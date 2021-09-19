<?php  
$movie = new film($film_id='',$title='',$descritpion='',$release_year='',$language_id='',$original_language_id='',$rental_duration='',$length='',$replacement_cost='',$special_features='',$last_update='');
$data = $movie->findOne([$film_id]);
print_r($data)
?>



    <div class="neuro">

        <i class="fas fa-film"></i>
        <p><?= $data->title?> </p>
        <p>sorti en <?= $data->release_year ?></p>
        <p>description: <?= $data->description ?></p>
        <em>Durée du film : <?= $data->length ?> minutes</em>
     
    </div>
