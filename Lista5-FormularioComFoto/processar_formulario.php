<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Informações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="container">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $dataNascimento = $_POST["data_nascimento"];
    $sexo = $_POST["sexo"];
    $estadoCivil = $_POST["estado_civil"];
    $rendaMensal = $_POST["renda_mensal"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    
    // Crie um diretório com o nome do CPF se ele não existir
    $diretorio = "./uploads/" . $cpf;
    if (!is_dir($diretorio)) {
        mkdir($diretorio, 0777, true);
    }
    
    // Crie o nome do arquivo com o CPF do cliente
    $nomeArquivo = $diretorio . "/" . $cpf . ".txt";
    
    // Abra o arquivo para escrita
    $arquivo = fopen($nomeArquivo, "w") or die("Não foi possível abrir o arquivo para escrita.");
    
    // Escreva os dados no arquivo
    $dados = "Nome: $nome\n";
    $dados .= "CPF: $cpf\n";
    $dados .= "Data de Nascimento: $dataNascimento\n";
    $dados .= "Sexo: $sexo\n";
    $dados .= "Estado Civil: $estadoCivil\n";
    $dados .= "Renda Mensal: $rendaMensal\n";
    $dados .= "Endereço: $logradouro, $numero";
    if (!empty($complemento)) {
        $dados .= " - $complemento";
    }
    $dados .= "\n";
    $dados .= "Cidade: $cidade\n";
    $dados .= "Estado: $estado\n";
    
    fwrite($arquivo, $dados);
    
    // Feche o arquivo
    fclose($arquivo);
    
    // Verifique e mova a foto de perfil
    $target_dir = "./uploads/";
    $target_file = $target_dir . $cpf . basename($_FILES["foto_perfil"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Verifique se o arquivo já existe
    if (file_exists($target_file)) {
        echo "Desculpe, o arquivo já existe.";
    } else {
        // Verifique o tamanho do arquivo
        if ($_FILES["foto_perfil"]["size"] > 500000) {
            echo "Desculpe, o arquivo é muito grande.";
        } else {
            // Verifique o formato do arquivo
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
            } else {
                if (move_uploaded_file($_FILES["foto_perfil"]["tmp_name"], $target_file)) {
                    echo "Cadastro realizado com sucesso!";
                } else {
                    echo "Desculpe, houve um erro ao fazer upload do arquivo.";
                }
            }
        }
    }
} else {
    echo "Acesso não autorizado!";
}
?>




    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
