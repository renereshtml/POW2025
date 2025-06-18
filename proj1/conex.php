
<?php
$hostname = "localhost";
$database = "cadastro";
$username = "root";
$password = "";
$porta = 3306;

$con =new mysqli($hostname, $username, $password,$database,$porta);
 
if($con) echo "conectado";

else echo "error 404"
// mysql_select_db($database, $con);
?>

