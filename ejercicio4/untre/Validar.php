<?php
function validar(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombres = trim($_POST['Nombre']);
        $apellidos = trim($_POST['Apellido']);
        $NomUs1 = trim($_POST['NombreUsu1']);
        $NomUs2 = trim($_POST['NombreUsu2']);
        $correoE = trim($_POST['Correo']);
        $contr1 = $_POST['Pass1'];
        $contr2 = $_POST['Pass2'];

        if($NomUs1 == $NomUs2){
            if($contr1 == $contr2){
                echo 'Bienvenido';
                return true; 
            }else{
                echo 'Las contraseñas no coinciden';
                return false; 
            }

        }else{
            echo 'El nombre de usuario no coincide';
            return false; 
        }
    
    
    }else{
        echo 'Envie por POST, son datos muy importantes...';
        return false; 
    }

}

validar(); 





?>