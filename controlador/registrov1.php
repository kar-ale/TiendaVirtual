<?php
include_once('db.php');
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$delegacion=$_POST['delegacion'];
$telefono=$_POST['telefono'];

echo "Los datos son los siguientes: <br>";
echo "$nombre,$apellido,$direccion,$ciudad,$delegacion,$telefono";

$conectar=conn();

$sql="INSERT INTO usuarios(nombre,apellido,direccion,ciudad,delegacion,telefono) VALUES ('$nombre','$apellido','$direccion','$ciudad','$delegacion','$telefono')";
$result = mysqli_query($conectar, $sql) or trigger_error("Query Failsed! SQL error: ".mysql_error($conectar),E_USER_ERROR);
echo "$sql";
?>