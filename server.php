<?php

//^ Ottengo il contenuto del file, diventa stringa

$json_text = file_get_contents('./disks.json');



//^ Decodifico in PHP

$disks = json_decode($json_text, true);

// var_dump($disks);

//^ Intercetto parametri inviati dal form e li aggiungo all'array

$_POST['title'];
$_POST['artist'];
$_POST['genre'];
$_POST['year'];

// var_dump($_POST['title']);
// var_dump($_POST['artist']);
// var_dump($_POST['genre']);
// var_dump($_POST['year']);

$disks[] = ["titolo" => $_POST['title'],
"artista" => $_POST['artist'],
"genere" => $_POST['genre'],
"anno" => (int) $_POST['year']
];

var_dump($disks);

//^ Codifico il PHP in json

$text_json = json_encode($disks);
var_dump($text_json);

//^ Sovrascrivo il file json

$json_update = file_put_contents('./disks.json', $text_json);
?>