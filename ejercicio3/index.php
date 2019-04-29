
<?php 

/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre.
 El arreglo debe tener el formato
 [
    'juan' => 'contrasena_segura'
 ]
 Crear un formulario que permita ingresar el nombre de usuario y la contraseña. 
 Al enviar el formulario se debe validar que la combinación de nombre de usuario y contraseña existan en el arreglo.
 Si los datos no son correctos imprimir un mensaje de error.
 Si los datos son correctos debe redirigir a otra página bienvenido.php que debe imprimir el mensaje "Bienvendo JUAN". (con el nombre de usuario en mayúsculas)
 */

function pasa($us, $con){
    $arreglo = array(
        'juan' => '12345', 
        'lolito' => 'Royale', 
        'david' => 'endgame'
    ); 

    if(!empty($us) and !empty($con)){
    
        if(array_key_exists($us, $arreglo)){
            if($arreglo[$us]== $con){
                echo 'Bienvenido: ' . strtoupper($us);
            }else {
                echo 'Usuario o contraseña incorrectos.. '; 
            }
        }else {
            echo 'error';
        }
    
 }else{
    echo 'Ingrese los campos..'; 
    }   
}

//-----------------------------

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $us = trim($_POST['User']);
    $con = $_POST['Pass'];
}else{
    echo 'Debe ser tipo post';
}

echo '<br>'; 
echo '<br>'; 

pasa($us, $con);

echo '<br>'; 
echo '<br>'; 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <form method = "POST">
        <div>
        USER: <input type= "text" name = "User">
        </div>
        <div>
        PASSWORD: <input type= "password" name = "Pass">
        </div>
        <div>
        <input type="submit" name = "BtnSend" value= "Ingresar">
        </div>
    </form>

  </body>
</html>