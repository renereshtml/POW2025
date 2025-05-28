<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <?php

    $a = $_POST['n1'] ;
    $b = $_POST['n2'] ;
    $o = $_POST['op'];


    if ($o == "soma") $r = $a + $b;
    if ($o == "sub") $r = $a - $b;
    if ($o == "mult") $r = $a * $b;
    if ($o == "div") 
    {
        if ($b == 0) 
        {
            echo "<p>Erro: divisão por zero.</p>";
            return;
        }
        $r = $a / $b;
    }

    echo "<br>O resultado é: ".$r;

?>
</body>
</html>


