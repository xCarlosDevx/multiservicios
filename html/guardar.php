
<?php

include '../basesDeDatos/conexion.php';

if (isset($_POST['Enviar'])) {
 
  $NOMBRE_A = $_POST['nombres'];
  $APELLIDO_A= $_POST['apellidos'];
  $TELEFONO_A = $_POST['telefono']; 
  $CORREO_A = $_POST['correo']; 
  $DIRECCION_A = $_POST['direccion'];
  $SERVICIO_A = $_POST['servicio'];
  $DESCRIPCION = $_POST['descripcion'];
  $query = "INSERT INTO `Pedidos`(`Nombre`, `Apellido`, `Telefono`, `Correo`, `Direccion`, `Servicio`, `Descripcion`) 
  VALUES ('$NOMBRE_A','$APELLIDO_A','$TELEFONO_A','$CORREO_A','$DIRECCION_A','$SERVICIO_A','$DESCRIPCION')";

$result = mysqli_query($conn, $query);
if(!$result) {
  die("Query Failed.". mysqli_error($conn));
}

$_SESSION['message'] = 'Tu peticion se ha realizado correctamente';
$_SESSION['message_type'] = 'success';
header('Location:confirmacion.html');

}

?>

