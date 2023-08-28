<!DOCTYPE html>
<html>
<head>
    <title>Identificar Números Primos</title>
</head>
<body>
    <form action="exerc5_resp.php" method="post">
        <h2>Informe 20 números inteiros:</h2>
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo '<input type="number" name="numeros[]" placeholder="Número ' . $i . '" required><br>';
        }
        ?>
        <br>
        <input type="submit" value="Identificar Primos">
    </form>
</body>
</html>
