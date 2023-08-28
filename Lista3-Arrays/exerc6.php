<!DOCTYPE html>
<html>
<head>
    <title>Análise de Produtos</title>
</head>
<body>
    <form action="exerc6_resp.php" method="post">
        <h2>Informe os dados dos produtos:</h2>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo '<label for="produto' . $i . '">Nome do Produto ' . $i . ': </label>';
            echo '<input type="text" name="produtos[]" required>';
            echo '<label for="preco' . $i . '">Preço do Produto ' . $i . ': </label>';
            echo '<input type="number" step="0.01" name="precos[]" required><br>';
        }
        ?>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
