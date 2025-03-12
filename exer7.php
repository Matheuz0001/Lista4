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
        <h1>Exercício 7</h1>


        <form method="post">

            <div class="mb-3">
                <label for="data1" class="form-label">Digite a primeira data</label>
                <input type="date" id="data1" name="data1" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="data2" class="form-label">Digite a segunda data </label>
                <input type="date" id="data2" name="data2" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <p></p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data1 = new DateTime($_POST['data1']);
            $data2 = new DateTime($_POST['data2']);

            $difer = $data1->diff($data2);

            echo"<div class='mt-3 alert alert-info'>";
            echo"<p>Diferença: <strong>{$difer->d} dias, {$difer->m} meses e {$difer->y} anos";
            echo"<p>Total de dias: <strong>{$difer->days} dias</strong></p>";
            echo"</div>";

        }
        ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>