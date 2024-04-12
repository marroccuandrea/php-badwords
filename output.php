<?php

$paragrafo = $_POST["paragrafo"];
$parola = $_POST["parola"];

$censurata = str_replace($parola, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Output</title>
</head>

<body>
    <div class="container my-5">
        <h1> Paragrafo: <?php echo $paragrafo ?> </h1>
    </div>
    <div class="container my-5">
        <h1> Parola: <?php echo $parola ?></h1>
    </div>
    <div class="container my-5">
        <h1> Paragrafo censurato: <?php echo $censurata ?></h1>
    </div>
    <div class="container my-5">
        <h1> Il paragrafo ha una lunghezza di: <?php echo strlen($paragrafo) ?></h1>
    </div>
    <div class="container my-5">
        <h1> Il paragrafo censurato ha una lunghezza di: <?php echo strlen($censurata) ?></h1>
    </div>
</body>

</html>