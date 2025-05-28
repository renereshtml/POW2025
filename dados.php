<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <h1>Página de Processamento</h1>
<?php
     $nm=$_POST['nm_user'];
     $pass=$_POST['senha'];

     if(strlen($pass)<8)
     {

      echo "Senha invalida (menor que 8 caracteres)<br>";
      echo '<a href="index.html" id="btn">Voltar</>';
    }
     else  
     {
        echo "Senha valida <br>";
        echo '<a href="index.html" id="btn">Voltar</>';
     }
?>
</body>
</html>