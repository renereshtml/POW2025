<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Consulta</title>
</head>
<body>
<?php
include "conex.php";
?>

  <h2>Consulta fluxo de Caixa</h2>

  <fieldset>
  <form action="cons_flx_exe.php" method="post">
   
   Tipo de Consulta: <br>
    <input type="radio" name="rd" value="tot" required>Saldo Total
   <input type="radio" name="rd" value="sai" required>Total Saídas
   <input type="radio" name="rd" value="ent"required>Total Entradas
   
   </fieldset>
    <input type="submit" value="Enviar">
  </form>
  <li><a href="index.html">Ínicio</a></li>
</body>
</html>
