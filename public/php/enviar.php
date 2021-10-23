<?php 
$nombre_formu = $_POST['nombre'];  
$apellido_formu = $_POST['apellido'];
$correo_formu = $_POST['correo'];  
$consulta_formu =$_POST['consulta'];

$mensaje="nombre:".$nombre_formu."\r\n" ."apellido:".$apellido_formu."\r\n".
"correo:".$correo_formu."\r\n"."consulta:".$consulta_formu;
@mail("juanfb19@gmail.com", " consulta enviada desde el sitio hoby consolas", $mensaje) ;

$conexion=mysqli_connect("localhost","root","","prowebinicial") or exit("no se puede conectar con la base de datos");
mysqli_query($conexion,"INSERT INTO contacto VALUES (DEFAULT,'$nombre_formu','$apellido_formu',
'$correo_formu','$consulta_formu')");

header("location:index.php?ok#legal");
?>