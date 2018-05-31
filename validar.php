<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost", "root", "", "proyectos1");
$consulta ="SELECT * FROM usuarios where usuario ='$usuario' and clave='$clave'";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
 header("location:index2.html");
}
else{
  header("location:index.html");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
