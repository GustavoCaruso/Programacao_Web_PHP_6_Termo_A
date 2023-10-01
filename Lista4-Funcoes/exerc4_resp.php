<!DOCTYPE html>
<html>
<head>
    <title>Exercício 4 - Lista 4</title>
</head>
<body>
    <?php
    function somaDivisores($numero) {
        $soma = 0;
        for ($i = 1; $i < $numero; $i++) {
            if ($numero % $i == 0) {
                $soma += $i;
            }
        }
        return $soma;
    }

    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3']) && isset($_POST['numero4']) && isset($_POST['numero5'])) {
        $numeros = array(
            $_POST['numero1'],
            $_POST['numero2'],
            $_POST['numero3'],
            $_POST['numero4'],
            $_POST['numero5']
        );
        foreach ($numeros as $numero) {
            $soma = somaDivisores($numero);
            echo "Divisores de $numero: ";
            for ($i = 1; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    echo "$i ";
                }
            }
            echo "= $soma<br>";
        }
    } else {
        echo "Por favor, forneça os números no formulário.";
    }
    ?>
</body>
</html>
