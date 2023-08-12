<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  

    ?>
    Olá, hoje é <?php echo date("d"); ?> de agosto de <?=date("d/m/Y")?>
   <?php $hora = date("H:i");
        echo  'Hora:'.$hora;
   ?>
   <div class="container">
    <form method="GET" action="bemvindo.php">
    <div class="row">
        <label for="valor1" class="form-label">Informe numero 1:</label>
        <input class="form-control" id="valor1" name="valor1" type="text"/>
        <label for="valor2" class="form-label">Informe numero 2:</label>
        <input class="form-control" id="valor2" name="valor2" type="text"/>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
    </form>
    
   </div>
</body>
</html>