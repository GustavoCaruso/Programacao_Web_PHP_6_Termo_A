<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Alunos</title>
</head>
<body>
    <h1>Informe o nome de 10 alunos</h1>
    <form action="exerc2_resp.php" method="post">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='aluno{$i}'>Aluno {$i}:</label>";
            echo "<input type='text' name='aluno{$i}' required><br>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
