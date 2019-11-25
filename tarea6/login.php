<?php include ("conexion.php");
$log=$_POST['txtLogin'];
$cont=$_POST['txtContraseña'];
$sql="select * from usuarios where login=$log and contraseña=$cont";
$resultado=$con->query($sql);
?>