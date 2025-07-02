<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
    <?php
include "conex.php";

$d1 = $_POST["rd"];

echo $d1 ."<br>";

if($d1=="ent")
{
  $sql="select sum(valor) valor from fluxo where tipo='entrada'";

  
  
}
elseif($d1=="sai")
{
  $sql="select sum(valor) valor from fluxo where tipo='saida'";
 
  
  
}
else if($d1=="tot")
{
$sql= "select sum(case when tipo='entrada' then valor 0 end) - 
               sum(case when tipo='saida then valor else 0 end) 
               as valor from fluxo"     ;   
             
  
}

if ($conn->query($sql) === TRUE) {
    echo "O valor é : ". $sql ;
} else {
    echo "Erro: " . $conn->error;
}
?>



<li><a href="index.html">Ínicio</a></li>
</body>
</html>