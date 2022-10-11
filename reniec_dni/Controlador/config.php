<?php
$conexion = mysqli_connect('localhost','root','','test');
if ($conexion){
	echo "la conexion ha sido exitosa";
}else{
	echo "no hay conexion, sabra dios que error es";
}
?>