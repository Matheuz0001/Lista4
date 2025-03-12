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
        <h1>Exercício 4</h1>


        <form method="post">

            <div class="mb-3">
                <label for="data" class="form-label">Digite a data</label>
                <input type="date" id="data" name="data" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <p></p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = $_POST['data'];
            
            //converte para formato de data 
            $formatada = date("d/m/Y", strtotime($data));

            echo "<p classo='mt-3'>A data informada foi: <strong>$formatada</strong></p>";
        }
        ?>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>