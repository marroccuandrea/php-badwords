<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>

<body>
    <div class="container my-5">
        <form action="output.php" method="post">
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Invio paragrafo</label>
                <input name="paragrafo" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputText" class="form-label">Invio parola da censurare</label>
                <input name="parola" type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Invio</button>
        </form>
    </div>

</body>

</html>