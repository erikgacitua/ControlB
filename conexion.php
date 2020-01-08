<?php
$conn = mysql_connect('localhost','root','egacitua');
$db = mysql_select_db('control',$conn);

if (!$conn) {
	echo "Error de conexión!";
}else{
	//echo "Conexion exitosa!";
}
?>