<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <?php

    $x = $_POST['n1'];
    $y = $_POST['n2'];
    $op = $_POST['op'];


    if ($op == "soma") $r = $x + $y;
    if ($op == "sub") $r = $x - $y;
    if ($op == "mult") $r = $x * $y;
    if ($op == "div") $r=$x / $y;
    {
        if ($y == 0) 
        {
            echo "<p>Erro: divisão por zero.</p>";
            return;
        }
        $r = $x / $y;
    }

    echo "<br>O resultado é: ".$r;
    echo '<br><a href="ex1list.html" id="btn">Voltar</>';

?>
</body>
</html>


