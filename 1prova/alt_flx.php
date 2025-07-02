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

$id = $_GET["id"];
$sql = "SELECT * FROM fluxo WHERE id = $id";
$res = $conn->query($sql);
$row = $res->fetch_assoc();
?>

<h2>Cadastro do fluxo</h2>

  <fieldset>
  <form action="alt_flx_exe.php" method="post">
    Data: <input type="date" name="data" required><br>
   Tipo: <input type="radio" name="rd" required>Entrada
   <input type="radio" name="rd" required>Saída<br>
   Valor: <input type="number" name="vl" required><br>
    Histórico: <input type="text" name="hist" required><br>
    
    Cheque? 
    <select name="plv">
        <option value="" disabled selected hidden>Deseja?</option>
      <option value="1">Sim</option>
      <option value="0">Não</option>
    </select><br>
   </fieldset>
    <input type="submit" value="Cadastrar">
  </form>
<br>
<li><a href="index.html">Ínicio</a></li>
</body>
</html>