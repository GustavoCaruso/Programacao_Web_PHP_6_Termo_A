<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php

    if(isset($_POST['numero1']) && isset($_POST['numero2'])){

        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        function encontreMenor($num1, $num2){
            if($num1 < $num2){
                return $num1;
            }
            else{
                return $num2;
            }
        }


        $menor = encontreMenor($numero1, $numero2);
        echo "O menor número entre $numero1 e $numero2 é: $menor";
    }
    else{
        echo "Por favor, forneça os números no formulário.";
    }
    ?>
</body>
</html>
