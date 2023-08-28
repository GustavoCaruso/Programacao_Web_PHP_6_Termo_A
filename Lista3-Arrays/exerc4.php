<!DOCTYPE html>
<html>

<head>
    <title>Exercício 4 - Lista 3</title>
</head>

<body>
    <h1>Nome do Mês</h1>
    <form method="post" action="">
        <?php
        $meses = array(
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numeroMes = intval($_POST["numeroMes"]);

            if ($numeroMes >= 1 && $numeroMes <= 12) {
                $nomeMes = $meses[$numeroMes];
                echo "<p>O mês correspondente ao número {$numeroMes} é: {$nomeMes}</p>";
            } else {
                echo "<p>Número de mês inválido. Digite um número de 1 a 12.</p>";
            }
        }
        ?>

        <h2>Digite um número de 1 a 12:</h2>
        <label for="numeroMes">Número: </label>
        <input type="number" name="numeroMes" min="1" max="12" required><br>

        <br>
        <input type="submit" value="Ver Mês">
    </form>
</body>

</html>