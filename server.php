<?php

//^ Ottengo il contenuto del file, diventa stringa

$json_text = file_get_contents('./disks.json');

//^ Decodifico in PHP

$disks = json_decode($json_text, true);

//^ Intercetto parametri inviati dal form e li aggiungo all'array

if(!empty($_POST['title']) && !empty($_POST['artist']) && !empty($_POST['genre']) && !empty($_POST['year']) && !empty($_POST['img'])) {

$disks[] = ["titolo" => $_POST['title'],
"artista" => $_POST['artist'],
"genere" => $_POST['genre'],
"anno" => (int) $_POST['year'],
"img" => $_POST['img']
];


//^ Codifico il PHP in json

$text_json = json_encode($disks, JSON_PRETTY_PRINT);

//^ Sovrascrivo il file json

$json_update = file_put_contents('./disks.json', $text_json);

header('Location: ./index.php');
} else {
    header('Location: ./index.php');
}
?>