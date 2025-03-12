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
        <h1>Exercício 5</h1>

        <form method="post">

            <div class="mb-3">
                <label for="valor" class="form-label">Digite o valor decimal</label>
                <input type="number" step="0.01" id="valor" name="valor" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary">Arredondar</button>
        </form>
        <p></p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor = $_POST['valor'];
            $arredondado = round($valor);

            echo "<p class='mt-3'>Número original: <strong>$valor</strong></p>";
            echo "<p>Número arredondado: <strong>$arredondado</strong></p>";
        }
        ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>