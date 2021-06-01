<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/forms.css">
  <title>Formulario Registro</title>
</head>
<body>
  
    <form class="form-register" action="guardar.php" method="POST">
      
   <a href="../index.html" class="link">Ir a inicio</a>
    <h4>Formulario Registro</h4>
    
    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Nombre">
    <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Apellido">
    <input class="controls" type="tel" name="telefono" id="telefono" placeholder="Telefono">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Correo">
    <input class="controls" type="text" name="direccion" id="direccion" placeholder="Direccion">
    <div>
        <label> <select name="servicio" class="controls" type="text">
          <?php 
          include '../basesDeDatos/conexion.php';
       
          $consulta="SELECT * FROM Servicios";
          $ejecutar=mysqli_query($conn, $consulta) or die(mysqli_error($conn));

          ?>

<?php foreach($ejecutar as $opciones): ?>

<option value="<?php echo $opciones['Nombre'] ?>"><?php echo $opciones['Nombre'] ?> </option>

<?php endforeach ?>

<option value=""></option>

</select> </label>
      </div>
      <textarea class="controls" name="descripcion" rows="5" data-rule="required" data-msg="Escriba su mensaje" placeholder="Escriba detalles de sus pedido"></textarea>
  
      <button  class="botons"name="Enviar">Enviar </button>
    </form>

</body>
</html>

</body>

</html>