<?php
require("conexion.php");

$email = $_POST["email"];
$pass = $_POST["pass"];
session_start();
$_SESSION['pass']=$pass;

$consulta = "SELECT * FROM usuarios WHERE Email='$email' and Password='$pass'";

$query = mysqli_query($connection,$consulta);
$filas = mysqli_num_rows($query);

if($filas){
    echo '<script>location.href = "../page.html"</script>';
}else {
    header("../index.html");
    echo "<h1>Ups!! ha ocurrido un error</h1>";
}
?>