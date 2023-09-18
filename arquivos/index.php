<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    
        <?php
         $palavra = "Gustavo\n";
         $texto_alterar = fopen("arquivo.txt", "w") or die ("Arquivo inexis");
         fwrite($texto_alterar, $palavra);
         fclose($texto_alterar);
        #echo readfile("arquivo.txt");
        $texto = fopen("arquivo.txt", "r") or die("Arquivo existente"); //echo fread($texto, filesize("arquivo.txt"));
       
        while(!feof($texto)){
            echo "<p>". fgets($texto) ."</p>";
        }
        fclose($texto);
        ?>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>