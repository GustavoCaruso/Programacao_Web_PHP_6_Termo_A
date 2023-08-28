<!DOCTYPE html>
<html>
<head>
    <title>Exercício 7 - Lista 3</title>
</head>
<body>
    <h1>Notas dos Alunos</h1>
    <form method="post" action="">
        <?php
        $alunos = array();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            for ($i = 1; $i <= 10; $i++) {
                $nome = $_POST["nome{$i}"];
                $nota1 = floatval($_POST["nota1_{$i}"]);
                $nota2 = floatval($_POST["nota2_{$i}"]);
                $media = ($nota1 + $nota2) / 2;
                $alunos[] = array("nome" => $nome, "nota1" => $nota1, "nota2" => $nota2, "media" => $media);
            }

            echo "<h2>Aprovados:</h2>";
            foreach ($alunos as $aluno) {
                if ($aluno["media"] >= 6) {
                    echo "<p>{$aluno["nome"]} - Média: {$aluno["media"]}</p>";
                }
            }

            echo "<h2>Reprovados:</h2>";
            foreach ($alunos as $aluno) {
                if ($aluno["media"] < 6) {
                    echo "<p>{$aluno["nome"]}</p>";
                }
            }
        }
        ?>

        <h2>Informe os dados dos alunos:</h2>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<label for='nome{$i}'>Nome do Aluno {$i}: </label>";
            echo "<input type='text' name='nome{$i}' required><br>";

            echo "<label for='nota1_{$i}'>Nota 1: </label>";
            echo "<input type='number' name='nota1_{$i}' step='any' required><br>";

            echo "<label for='nota2_{$i}'>Nota 2: </label>";
            echo "<input type='number' name='nota2_{$i}' step='any' required><br>";

            echo "<br>";
        }
        ?>

        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
