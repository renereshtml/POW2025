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

$c = $_POST["data"];
$d = $_POST["rd"];
$m = $_POST["vl"];
$mo = $_POST["hist"];
$a = $_POST["plv"];

$sql = "UPDATE fluxo SET
    dataa = '$c',
   tipo = '$d',
    valor= '$m',
   hitorico = '$mo',
   cheque = $a,
    
WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Alteração realizada com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
<br>
<li><a href="index.html">Ínicio</a></li>

</body>
</html>
