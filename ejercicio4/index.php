<?php
/**
 * Problema Propuesto:
 * Desarrollar un formulario que simule el registro de un usuario (archivo index.php). 
 * El formulario debe solicitar el nombre de usuario y la clave en dos oportunidades. 
 * El formulario debe ser procesado por el archivo validarRegistro.php. Este archivo
 * debe implementar una función que permita validar si las dos contraseñas coinciden. 
 * Si las contraseñas coinciden, se debe redirigir al archivo "registroCorrecto.php"
 * Si las contraseñas no coinciden, se debe redirigir al index.php y mostrar el mensaje
 * "Las contrseñas no coinciden".
 */
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" type="text/css" href="ArCss/estilos.css"/>
    <title>Ejercicio 3</title>
  </head>
  <body>

  
    <form id = "Formulario" action = "untre/Validar.php" method = "POST">
        <div>
        Nombre: <input type= "text" name = "Nombre">
        </div>
        <div>
        Apellidos: <input type= "text" name = "Apellido">
        </div>
        <div>
        Nombre de usuario: <input type= "text" name = "NombreUsu1" required>  
        </div>
        <div>
        Vuelva a escribir su Nombre de usuario: <input type= "text" name = "NombreUsu2" required>
        </div>
        <div>
        Correo Electronico: <input type= "email" name = "Correo">
        </div>
        <div>
        PASSWORD: <input type= "password" name = "Pass1" required>
        </div>
        <div>
        Vuelva a escribir a su Nombre de usuario: <input type= "password" name = "Pass2" required>
        </div>
        <div>
        <input type="submit" name = "BtnSend" value= "Registrar">
        </div>
    </form>


  </body>
</html>