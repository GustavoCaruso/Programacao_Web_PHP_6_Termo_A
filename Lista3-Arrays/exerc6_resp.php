<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Análise de Produtos</title>
</head>
<body>
    <?php
    $produtos = $_POST['produtos'];
    $precos = $_POST['precos'];

    $qtdeMenor50 = 0;
    $prodEntre50e100 = [];
    $somaPrecosSuperior100 = 0;
    $qtdePrecosSuperior100 = 0;

    for ($i = 0; $i < count($produtos); $i++) {
        if ($precos[$i] < 50) {
            $qtdeMenor50++;
        } elseif ($precos[$i] >= 50 && $precos[$i] <= 100) {
            $prodEntre50e100[] = $produtos[$i];
        } else {
            $somaPrecosSuperior100 += $precos[$i];
            $qtdePrecosSuperior100++;
        }
    }

    echo '<h2>Resultados:</h2>';
    echo '<p>Quantidade de produtos com preço inferior a R$50,00: ' . $qtdeMenor50 . '</p>';
    
    if (!empty($prodEntre50e100)) {
        echo '<p>Produtos com preço entre R$50,00 e R$100,00: ' . implode(', ', $prodEntre50e100) . '</p>';
    } else {
        echo '<p>Nenhum produto com preço entre R$50,00 e R$100,00 encontrado.</p>';
    }
    
    if ($qtdePrecosSuperior100 > 0) {
        $mediaPrecosSuperior100 = $somaPrecosSuperior100 / $qtdePrecosSuperior100;
        echo '<p>Média dos preços dos produtos com preço superior a R$100,00: R$' . number_format($mediaPrecosSuperior100, 2) . '</p>';
    } else {
        echo '<p>Não há produtos com preço superior a R$100,00 para calcular a média.</p>';
    }
    ?>
</body>
</html>
