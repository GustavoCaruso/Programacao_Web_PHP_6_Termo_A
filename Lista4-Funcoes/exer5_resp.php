<!DOCTYPE html>
<html>
<head>
    <title>Resultado do IMC</title>
</head>
<body>
    <h1>Resultado do IMC</h1>
    <?php
    
    if(isset($_POST['altura']) && isset($_POST['peso'])){
        
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];

        
        function calculaIMC($altura, $peso){
            $imc = $peso / ($altura * $altura);
            return $imc;
        }

        
        $imc = calculaIMC($altura, $peso);

        
        if ($imc < 18.5) {
            $classificacao = "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            $classificacao = "Peso ideal (parabéns)";
        } elseif ($imc >= 25.0 && $imc <= 29.9) {
            $classificacao = "Levemente acima do peso";
        } elseif ($imc >= 30.0 && $imc <= 34.9) {
            $classificacao = "Obesidade grau I";
        } elseif ($imc >= 35.0 && $imc <= 39.9) {
            $classificacao = "Obesidade grau II (severa)";
        } else {
            $classificacao = "Obesidade grau III (mórbida)";
        }

       
        echo "Seu IMC é: " . number_format($imc, 2) . "<br>";
        echo "Classificação: " . $classificacao;
    }
    else{
        echo "Por favor, forneça a altura e o peso no formulário.";
    }
    ?>
</body>
</html>
