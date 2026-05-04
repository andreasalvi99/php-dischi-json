<?php 

//^ Ottengo il contenuto del file, diventa stringa
$json_text = file_get_contents('disks.json');

// var_dump($json_text);

//^ Decodifico in PHP
$disks = json_decode($json_text, true);

var_dump($disks);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<section>
    <div class="container mt-3">
<h1>I tuoi dischi:</h1>

<hr>

<ul>
<?php

    foreach($disks as $disk) {
        foreach($disk as $key => $value) {
        echo "<li>$key: $value</li>";
        }
};

?>
</ul>

</div>
</section>

    
</body>
</html>