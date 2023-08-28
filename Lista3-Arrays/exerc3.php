<!DOCTYPE html>
<html>
<head>
    <title>Multiplicação de Valores</title>
</head>
<body>
    <h1>Multiplicação de Valores</h1>
    <form method="post" action="">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valores = array();
            for ($i = 1; $i <= 10; $i++) {
                $valor = floatval($_POST["valor{$i}"]);
                $valores[] = $valor;
            }

            $numeroMultiplicacao = floatval($_POST["numeroMultiplicacao"]);

            echo "<p>Valores multiplicados:</p>";
            echo "<ul>";
            foreach ($valores as $valor) {
                $resultado = $valor * $numeroMultiplicacao;
                echo "<li>{$valor} * {$numeroMultiplicacao} = {$resultado}</li>";
            }
            echo "</ul>";
        }
        ?>

        <h2>Informe 10 valores:</h2>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='valor{$i}'>Valor {$i}: </label>";
            echo "<input type='number' name='valor{$i}' step='any' required><br>";
        }
        ?>

        <h2>Informe o número para multiplicação:</h2>
        <label for="numeroMultiplicacao">Número: </label>
        <input type="number" name="numeroMultiplicacao" step="any" required><br>

        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
