
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
    <!-- <link rel="stylesheet" href="css/estil.css"> -->
</head>
<body>
    
<?php

 $nm=$_POST['nome'] ??'';
$em=$_POST['email'] ??'';
$y=$_POST['idade'] ??'';
$lg=$_POST['curso'] ??'';


if($nm && $em && $y && $lg)
{
    $ln="Nome: $nm | Email: $em | Idade: $y | Curso: $lg \n" ;
    file_put_contents("cadastro.txt", $ln, FILE_APPEND);

    echo "<h1> Dados Recebidos</h1><br>";
    echo"Nome: $nm <br>";
    echo"Email: $em <br>";
    echo"Idade: $y <br>";
    echo"Curso: $lg <br>";

    echo '<br><br><a href="index.html" id="btn">Novo Cadastro</>';
}
else echo "Todos os campos são OBRIGATÓRIOS";

?>
</body>
</html>
