<!DOCTYPE html>
<html>
<head>
    <title>Verificar Data</title>
</head>
<body>
    <h1>Verificar Data e Dia da Semana</h1>
    <form action="exerc1_resp.php" method="post">
        <label for="data">Digite uma data (AAAA-MM-DD):</label>
        <input type="text" name="data" id="data" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "verificar_data.php"; // Inclui o arquivo com a função de verificação

        $data = $_POST["data"];
        
        if (validarData($data)) {
            $dataObj = new DateTime($data);
            $diaSemana = $dataObj->format('l'); // Obtém o dia da semana
            
            echo "<p>A data {$data} é válida e corresponde a um(a) {$diaSemana}.</p>";
        } else {
            echo "<p>A data informada não é válida.</p>";
        }
    }
    ?>
</body>
</html>
