<?php
include 'conectar.php';

//Recibir los datos y almacenarlos en variables
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$identificacion = $_POST["identificacion"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

//Consulta para insertar
$insertar_usuario = "INSERT INTO usuarios(nombres,  apellidos, identificacion, correo, usuario, clave) VALUES ('$nombres', '$apellidos', '$identificacion', '$correo', '$usuario', '$clave')";


$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '<script>
        alert("El usuario ya está registrado");
        window.history.go(-1);
        </script>
        ';
    exit; //si no se pone esto, va a ejecutar la consulta y va a guardar el dato
} 

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 0) {
    echo '<script>
        alert("El correo ya está en uso");
        window.history.go(-1);
        </script>
        ';
    exit; 
} 

$verificar_identificacion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE identificacion = '$identificacion'");
if (mysqli_num_rows($verificar_identificacion) > 0) {
    echo '<script>
        alert("El número de identificación ya está en uso");
        window.history.go(-1);
        </script>
        ';
    exit; 
} 

//Ejecutar la consulta
$resultado_usuario = mysqli_query($conexion, $insertar_usuario);

if(!$resultado_usuario) {
    echo '<script>
        alert("Error al enviar los datos");
        
        </script>
        ';
} else {
    echo '<script>
        alert("Usuario registrado");
        window.history.go(-1);
        </script>
        ';
}

mysqli_close($conexion);

?>