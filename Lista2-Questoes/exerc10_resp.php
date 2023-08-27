<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercício 10 - Lista 2</title>
</head>

<body class="container">
<h1>Resultado do IMC</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = $peso / ($altura * $altura);

    echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";

    if ($imc < 18.5) {
        echo "<p>Você está abaixo do peso.</p>";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "<p>Seu peso está normal.</p>";
    } elseif ($imc >= 25 && $imc < 29.9) {
        echo "<p>Você está com sobrepeso.</p>";
    } else {
        echo "<p>Você está com obesidade.</p>";
    }
}
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>