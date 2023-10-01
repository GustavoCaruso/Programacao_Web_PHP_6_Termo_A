<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php

    if(isset($_POST['hora'])){
  
        $hora = $_POST['hora'];

        function converteHora($hora){
            $hora_24 = explode(":", $hora);
            $hora_formatada = $hora_24[0];
            $minutos = $hora_24[1];
            
            if ($hora_24[0] >= 12) {
                $periodo = "P.M.";
                if ($hora_24[0] > 12) {
                    $hora_formatada = $hora_24[0] - 12;
                }
            } else {
                $periodo = "A.M.";
                if ($hora_24[0] == 0) {
                    $hora_formatada = 12;
                }
            }
            
            return "$hora_formatada:$minutos $periodo";
        }

  
        $hora_convertida = converteHora($hora);
        echo "Hora convertida: $hora_convertida";
    }
    else{
        echo "Por favor, forneça a hora no formato HH:MM no formulário.";
    }
    ?>
</body>
</html>
