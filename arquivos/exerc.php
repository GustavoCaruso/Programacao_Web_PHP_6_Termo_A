<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Registro de Alunos</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $alunos = $_POST["alunos"];
      $arquivo = fopen("alunos.txt", "a") or die("Não foi possível abrir o arquivo.");

      foreach ($alunos as $aluno) {
        fwrite($arquivo, $aluno . "\n");
      }

      fclose($arquivo);
    }
    ?>

    <form method="post">
      <div class="mb-3">
        <label for="aluno1" class="form-label">Nome do Aluno 1:</label>
        <input type="text" class="form-control" id="aluno1" name="alunos[]" required>
      </div>
      <div class="mb-3">
        <label for="aluno2" class="form-label">Nome do Aluno 2:</label>
        <input type="text" class="form-control" id="aluno2" name="alunos[]" required>
      </div>
      <div class="mb-3">
        <label for="aluno3" class="form-label">Nome do Aluno 3:</label>
        <input type="text" class="form-control" id="aluno3" name="alunos[]" required>
      </div>
      <div class="mb-3">
        <label for="aluno4" class="form-label">Nome do Aluno 4:</label>
        <input type="text" class="form-control" id="aluno4" name="alunos[]" required>
      </div>
      <div class="mb-3">
        <label for="aluno5" class="form-label">Nome do Aluno 5:</label>
        <input type="text" class="form-control" id="aluno5" name="alunos[]" required>
      </div>
      <button type="submit" class="btn btn-primary">Registrar Alunos</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
