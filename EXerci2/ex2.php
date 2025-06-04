<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <?php

    $x = $_POST['nm'];
    $rec= $_POST['tar'];
    $op = $_POST['op'];
    $est= $_POST['slc'];


      echo "Seu nome é:".$x;
      echo "<br>Recado:".$rec;

    if ($op == "masc")  echo"<br>Gênero masculino";
    if ($op == "fm")  echo"<br>Gênero feminino ";
    if ($op == "out") echo "<br>Outro ";


    if (isset($_POST['atividades'])) {
        $atividades = $_POST['atividades']; // isso é um array
        echo "<br>Atividades escolhidas:";
        $nomes = [
            "CN" => "Cinema",
            "AC" => "Academia",
            "ESP" => "Esporte"
        ];
        
        foreach ($atividades as $codigo) {
            if (isset($nomes[$codigo])) {
                echo "- " . $nomes[$codigo] ;
            }
        }
        }
     else {
        echo "<br>Nenhuma atividade foi escolhida.";
    }
     
    if ($est == "sp") echo "<br>Estado: São Paulo";
    if ($est == "rj")  echo"<br>Estado: Rio de Janeiro";
    if ($est == "es") echo "<br>Estado: Espirito Santo";
    if ($est == "mg") echo "<br>Estado: Minas Gerais";
   
    echo '<br><br><a href="ex2.html" id="btn">Voltar</>';
?>
</body>
</html>