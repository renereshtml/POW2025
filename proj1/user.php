<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <?php
    include ('conex.php');
    $n = $_POST['nome_usuario'];
    $e = $_POST['email_usuario'];
    $f = $_POST['fone_usuario'];

    echo "<p>Nome do usuario: ".$n."<br>";
    echo "E-mail: ".$e."<br>";
    echo "Telefone: ".$f."</p>";


    echo '<br><br><a href="cdas_user.html" id="btn">Novo Cadastro</>';
    ?>

</body>
</html>