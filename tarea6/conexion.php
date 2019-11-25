<?php 
$con =new mysqli("localhost", "root", "","bdhotel);
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
?>