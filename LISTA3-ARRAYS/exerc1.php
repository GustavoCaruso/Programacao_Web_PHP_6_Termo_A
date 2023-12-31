<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>exercício 1 - Lista 3</title>
</head>

<body class="container">
    <form action="exerc1.php" method="POST">
        <?php for ($i = 1; $i <= 10; $i++) { ?>


            <div class="row">
                <div class="col">
                    <label for="aluno<?= $i ?>" class="form-label">Informe o nome do aluno<?= $i ?>:</label>
                    <input type="text" name="aluno<?= $i ?>" id="aluno<?= $i ?>" class="form-control" />
                </div>
                <div class="col">
                    <label for="nota<?= $i ?>" class="form-label">Informe a nota do aluno <?= $i ?>:</label>
                    <input type="number" name="nota<?= $i ?>" id="nota<?= $i ?>" class="form-control" />
                </div>
            </div>
        <?php } ?>
        <div class="row">
            <div class="col">
                <button type="sumit" class="btn btn-warning">Calcular</button>
            </div>
        </div>
    </form>
    <?php
    if ($_POST) {
        for ($i = 1; $i <= 10; $i++) {
            $vetor[$_POST["aluno$i"]] = $_POST["nota$i"];
        }
        foreach ($vetor as $chave => $valor) {
            echo "<br> Nome do aluno $chave - Nota: $valor";
        }
    }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>