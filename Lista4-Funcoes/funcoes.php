<?php
    $data = date("d/m/y");
    echo "Dia de hoje: $data";
    $dia = 22;
    $mes = 3;
    $ano = 2023;
    if(checkdate($mes, $dia, $ano)){
        echo"A data existe";
    } 
    $palavra = "Toledo Prudente";
    echo "Apalavra tem".strlen($palavra). "caracteres";

    $primeira_palavra = strtoupper( substr($palavra, 0, 6));
    $segunda_palavra = strtoupper(substr($palavra, -8));
    echo "Primeira: $primeira_palavra";
    echo "Segunda: $segunda_palavra";


    $nomes = ["Julia", "Andre", "Gustavo", "Bruno", "Felipe", "Lucas", "Pedro", "João"];

    sort($nomes);
    var_dump($nomes);

    $valor = 10569.123456;
    $valor = number_format($valor,2, ",", ".");
    echo "Valor formatado: $valor";


    function soma($valor1, $valor2):float{
        $resultado = $valor1 + $valor2;
        return $resultado;
    }
    echo "Chamando a função soma".(soma(1,2));
?>

<a href="teste.php" target="_blank">clique aqui</a>
