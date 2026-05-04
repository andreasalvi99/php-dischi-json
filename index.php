<?php 

//^ Ottengo il contenuto del file, diventa stringa
$json_text = file_get_contents('disks.json');

// var_dump($json_text);

//^ Decodifico in PHP
$disks = json_decode($json_text, true);

// var_dump($disks);
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
    <div class="container mt-4">
        <h1>I tuoi dischi:</h1>

        <hr>

        <div class="row row-cols-4 gy-5 text-center mt-3">
        <?php

            foreach($disks as $disk) {

                echo '<div class="col">
                        <div class="card text-bg-dark" style="width: 18rem;">
                        <figure class="p-4 m-0">
                        <img src=' . $disk['img'] . ' class="card-img-top border border-white border-2"  alt="...">
                        </figure>
                        <div class="card-body p-2">
                            <p class="card-text fs-5 fw-bold m-2">' . $disk['titolo'] . '</p>
                            <p class="card-text m-1">' . $disk['artista'] . '</p>
                            <p class="card-text m-1">' . $disk['anno'] . '</p>
                        </div>
                        </div>
                    </div>';
        
        };

        ?>
        </div>

        <h2 class="mt-5">Aggiugni disco</h2>

        <hr>

        <div class="form-control mt-3">
            <form action="./server.php" method="POST">
                <label class="form-label" for="title">Titolo</label>
                <input type="text" class="form-control mb-3" name="title" id="title">
                <label class="form-label" for="artist">Artista</label>
                <input type="text" class="form-control mb-3" name="artist" id="artist">
                <label class="form-label" for="genre">Genere</label>
                <input type="text" class="form-control mb-3" name="genre" id="genre">
                <label class="form-label" for="year">Anno</label>
                <input type="number" class="form-control mb-3" name="year" id="year">

                <button class="btn btn-primary my-3" type="submit">Invia</button>
            </form>
        </div>


</div>
</section>

    
</body>
</html>