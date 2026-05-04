<?php

//^ Ottengo il contenuto del file, diventa stringa

$json_text = file_get_contents('./disks.json');



//^ Decodifico in PHP

$disks = json_decode($json_text);

// var_dump($disks);

//^ Intercetto parametri inviati dal form e li aggiungo all'array

$_POST['title'];
$_POST['artist'];
$_POST['genre'];
$_POST['year'];

var_dump($_POST['title']);
var_dump($_POST['artist']);
var_dump($_POST['genre']);
var_dump($_POST['year']);
?>