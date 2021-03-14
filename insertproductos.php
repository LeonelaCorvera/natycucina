<?php

include 'funciones\database.php';

$nombre= $_POST['nombre'];
$descripcion= $_POST['descripcion'];
$precio= $_POST['precio'];


	$consulta="INSERT INTO producto(nombre, descripcion, precio)
	VALUES('".$nombre."','".$descripcion."',".$precio.");";
	$resultado=db_query($consulta);

	header("Location: NuevoProducto.php");

?>
