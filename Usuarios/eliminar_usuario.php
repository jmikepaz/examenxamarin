<?php 

include "../conexion.php";

$id = $_GET["id"]; 



$query = "delete from public.usuarios where id_usuario='".$id."';";

$resultado = pg_query($db_handle,$query);

$datos = pg_fetch_all($resultado);
//echo $datos;

?>