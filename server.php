<?php

//^ Ottengo il contenuto del file, diventa stringa

$json_text = file_get_contents('./disks.json');



//^ Decodifico in PHP

$disks = json_decode($json_text);

var_dump($disks);

?>