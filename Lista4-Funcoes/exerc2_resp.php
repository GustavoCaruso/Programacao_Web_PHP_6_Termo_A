<!DOCTYPE html>
<html>
<head>
    <title>Alunos em Ordem Alfabética</title>
</head>
<body>
    <h1>Nomes dos alunos em ordem alfabética</h1>
    <?php
    $alunos = array();
    for ($i = 1; $i <= 10; $i++) {
        $aluno = $_POST["aluno{$i}"];
        if (!empty($aluno)) {
            $alunos[] = $aluno;
        }
    }

    sort($alunos); // Classifica os nomes em ordem alfabética

    if (count($alunos) > 0) {
        echo "<ul>";
        foreach ($alunos as $nome) {
            echo "<li>{$nome}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nenhum nome de aluno foi informado.</p>";
    }
    ?>
</body>
</html>
