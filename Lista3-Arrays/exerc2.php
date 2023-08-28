<!DOCTYPE html>
<html>

<head>
    <title>Exercício 2 - Lista 3</title>
</head>

<body>
    <h1>Contagem de Números</h1>
    <form method="post" action="">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $negativos = 0;
            $positivos = 0;
            $pares = 0;
            $impares = 0;

            $numeros = array();

            for ($i = 1; $i <= 10; $i++) {
                $numero = intval($_POST["numero{$i}"]);
                $numeros[] = $numero;

                if ($numero < 0) {
                    $negativos++;
                } elseif ($numero > 0) {
                    $positivos++;
                }

                if ($numero % 2 == 0) {
                    $pares++;
                } else {
                    $impares++;
                }
            }

            echo "<p>Quantidade de números negativos: {$negativos}</p>";
            echo "<p>Quantidade de números positivos: {$positivos}</p>";
            echo "<p>Quantidade de números pares: {$pares}</p>";
            echo "<p>Quantidade de números ímpares: {$impares}</p>";
        }
        ?>

        <h2>Informe 10 números:</h2>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='numero{$i}'>Número {$i}: </label>";
            echo "<input type='number' name='numero{$i}' required><br>";
        }
        ?>

        <br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>