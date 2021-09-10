<?php

$listActor = new actor($actor_id='',$first_name='',$last_name='');
$listActor->findAll();


//var_export ($listActor);

foreach($listActor as $key => $value) {
    print "$key => $value\n";
}
echo "\n";