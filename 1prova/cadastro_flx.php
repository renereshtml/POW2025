<?php
include "conex.php";

$c = $_POST["data"];
$d = $_POST["rd"];
$m = $_POST["vl"];
$mo = $_POST["hist"];
$a = $_POST["plv"];


$sql = "INSERT INTO fluxo
(dataa, tipo, valor, hitorico, cheque)
VALUES ('$c', '$d', '$m', '$mo', '$a')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
