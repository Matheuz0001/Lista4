<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Exercício 3</h1>

        <form method="post">

            <div class="mb-3">
                <label for="palavra1" class="form-label">Digite a primeira palavra</label>
                <input type="text" id="palavra1" name="palavra1" class="form-control" required="">

                <label for="palavra2" class="form-label">Digite a segunda palavra</label>
                <input type="text" id="palavra2" name="palavra2" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <p></p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $palavra1 = $_POST['palavra1'];
            $palavra2 = $_POST['palavra2'];
            
            if (str_contains($palavra1, $palavra2)) {
                echo "A palavra '$palavra2' está contida em '$palavra1'.";
            } else {
                echo "A palavra '$palavra2' não está contida em '$palavra1'.";
            }
        }
        ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>