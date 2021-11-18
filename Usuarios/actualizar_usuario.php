<?php 

include "../conexion.php";
 

$id = $_GET["id"]; 
$nombre = $_GET["nombres"]; 
$apellido = $_GET["apellidos"]; 
$telefono = $_GET["telefono"]; 
$latitud = $_GET["latitud"]; 
$longitud = $_GET["longitud"]; 
$direccion = $_GET["direccion"]; 
$identidad = $_GET["identidad"];
$url_foto = $_GET["url_foto"];
$usuarios = $_GET["usuario"];
$contrasenia = $_GET["contrasenia"];
$correo = $_GET["correo"];
$activo = $_GET["activo"];
$fecha = $_GET["fecha"];
$rol = $_GET["rol"];

$query = "UPDATE public.usuarios
	SET nombres='$nombre', apellidos='$apellido', telefono='$telefono', latitud='$latitud', longitud='$longitud', direccion='$direccion', identidad='$identidad', url_foto='$url_foto', usuario='$usuarios', contrasenia='$contrasenia', correo='$correo', activo='$activo', fecha='$fecha', id_rol='$rol'
	WHERE id_usuario='$id'";


//$query = "UPDATE public.usuarios nombres"" where id_usuario='".$id."';";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);
//echo $datos;

?>