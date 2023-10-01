<!DOCTYPE html>
<html>
<head>
    <title>Exercício 6 - Lista 4</title>
</head>
<body>
    <h1>Exercício 6 - Lista 4</h1>
    <?php

    function verificaNumeroPerfeito($numero) {
        $somaDosFatores = 0;

        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $somaDosFatores += $i;
            }
        }

        if ($somaDosFatores == $numero) {
            return true;
        } else {
            return false;
        }
    }

    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if (verificaNumeroPerfeito($numero)) {
            echo "$numero é um número perfeito.";
        } else {
            echo "$numero não é um número perfeito.";
        }
    } else {
        echo "Por favor, forneça um número no formulário.";
    }
    ?>
</body>
</html>
