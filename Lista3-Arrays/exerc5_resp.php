<!DOCTYPE html>
<html>
<head>
    <title>Números Primos Identificados</title>
</head>
<body>
    <?php
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }

    $numeros = $_POST['numeros'];
    $primos = [];

    echo '<h2>Números Primos Identificados:</h2>';
    echo '<ul>';

    foreach ($numeros as $numero) {
        if (isPrime($numero)) {
            $primos[] = $numero;
            echo '<li>' . $numero . '</li>';
        }
    }

    echo '</ul>';

    if (empty($primos)) {
        echo '<p>Nenhum número primo foi identificado.</p>';
    }
    ?>
</body>
</html>
