<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Preencha com suas informações pessoais</h2>
        <form action="processar_formulario.php" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                </div>
                <div class="form-group col-md-4">
                    <label>Sexo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino" required>
                        <label class="form-check-label" for="masculino">Masculino</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino" required>
                        <label class="form-check-label" for="feminino">Feminino</label>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="estado_civil">Estado Civil</label>
                    <select class="form-control" id="estado_civil" name="estado_civil" required>
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="casado">Casado(a)</option>
                        <option value="divorciado">Divorciado(a)</option>
                        <option value="viuvo">Viúvo(a)</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="renda_mensal">Renda Mensal</label>
                    <input type="text" class="form-control" id="renda_mensal" name="renda_mensal" required>
                </div>
            </div>
            <h3>Endereço</h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" class="form-control" id="logradouro" name="logradouro" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control" id="numero" name="numero" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" id="complemento" name="complemento">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="estado">Estado</label>
                    <select class="form-control" id="estado" name="estado" required>
                        <option value="sp">São Paulo</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="mg">Minas Gerais</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="foto_perfil">Foto de Perfil</label>
                    <input type="file" class="form-control-file" id="foto_perfil" name="foto_perfil" accept="image/*" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
