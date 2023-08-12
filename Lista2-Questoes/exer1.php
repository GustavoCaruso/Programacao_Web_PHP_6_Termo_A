<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <title>Bootstrap Formulário</title>
</head>
<body>
    <div class="container">
        <form action="exerc_resp.php" method="POST">
            <div class="form-group">
                <label for="valor">Nome:</label>
                <input type="number" class="form-control" id="valor" name="valor" placeholder="Informe o valor">
            </div>
           
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>
