<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <?php
include "conex.php";

$sql = "SELECT * FROM fluxo";
$res = $conn->query($sql);

echo "<h2>Lista de fluxos</h2>";

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Data: " . $row["dataa"] . "<br>";
        echo "Tipo: " . $row["tipo"] . "<br>";
        echo "Valor: " . $row["valor"] . "<br>";
        echo "Histórico: " . $row["hitorico"] . "<br>";
        echo "Cheque: " . $row["cheque"] . "<br>";
        echo "<td><a href='excl_flx.php?id=".$row['id']."'>Excluir</a></td>";
        echo"<br>";
         echo "<a href='alt_flx.php?id=" . $row["id"] . "'>Alterar</a><br><hr>";
    }
} else {
    echo "Nenhum computador cadastrado.";
}

$conn->close();
?>
<br>
<li><a href="index.html">Ínicio</a></li>
</body>
</html>
