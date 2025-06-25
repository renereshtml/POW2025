
<?php
$hostname = "localhost";
$database = "cadastro";
$username = "root";
$password = "";


$con =new mysqli($hostname, $username, $password,$database);
 
//if($con) echo "conectado";

//else echo "error 404"
// mysql_select_db($database, $con);

if ($con->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
?>

