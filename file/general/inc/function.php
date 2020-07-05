<?php
include("tools.php");//inicia la conexion
//funcion seleccionar
function select($sql)
	{
		$connect = new Tools();
        $conexion = $connect->conectarDB();
        $ejecutar = mysqli_query($conexion,$sql);
		$asociar=mysqli_fetch_assoc($ejecutar);
		$cantidad=mysqli_num_rows($ejecutar);
        $connect->desconectarDB($conexion);
		return array($cantidad, $asociar, $ejecutar);
	}
//funcion ejecutar
function ejecutar($sql)
{
	$connect = new Tools();
    $conexion = $connect->conectarDB();
    $ejecutar = mysqli_query($conexion,$sql) or die (mysqli_error($conexion));
	$connect->desconectarDB($conexion);
	if($ejecutar)
		return 1;
	else return 0;
}