<?php
/*
- Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece cada día del año (suponiendo un año no bisiesto) y muestre por pantalla la lista con el mes como encabezado seguido de la lista de los días que pertenecen a ese mes. 
- Utilizar HTML y CSS para dar estilo a la lista. Cada mes debe mostrarse de diferente color junto con la lista de días. Los meses deben aparecer con negrita. Pista: se puede utilizar elementos ul y li para mostrar la lista.

*/
function Agrega($fecha){
    $diasSemana = array('Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo', 'Lunes'); 
    $contDias = 0; 
    $mesesAnio = array('Enero','Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
    for ($i = 1 ; $i <=365; $i++ ){
        if($contDias > 6){
            $contDias = 0; 
        }
        if($i <= 31){
            $fecha [$i] = array( $mesesAnio[0] => $diasSemana[$contDias]); 
        }else if($i <= 59){
            $fecha [$i] = array( $mesesAnio[1] => $diasSemana[$contDias]); 
        }else if($i <= 90){
            $fecha [$i] = array( $mesesAnio[2] => $diasSemana[$contDias]); 
        }else if($i <= 120){
            $fecha [$i] = array( $mesesAnio[3] => $diasSemana[$contDias]); 
        }else if($i <= 151){
            $fecha [$i] = array( $mesesAnio[4] => $diasSemana[$contDias]); 
        }else if($i <= 181){
            $fecha [$i] = array( $mesesAnio[5] => $diasSemana[$contDias]); 
        }else if($i <= 212){
            $fecha [$i] = array( $mesesAnio[6] => $diasSemana[$contDias]); 
        }else if($i <= 243){
            $fecha [$i] = array( $mesesAnio[7] => $diasSemana[$contDias]); 
        }else if($i <= 273){
            $fecha [$i] = array( $mesesAnio[8] => $diasSemana[$contDias]);
        }else if($i <= 304){
            $fecha [$i] = array( $mesesAnio[9] => $diasSemana[$contDias]); 
        }else if($i <= 334){
            $fecha [$i] = array( $mesesAnio[10] => $diasSemana[$contDias]); 
        }else if($i <= 365){
            $fecha [$i] = array( $mesesAnio[11] => $diasSemana[$contDias]); 
        }  
        $contDias++; 
    }
return $fecha; 
}


function resultados(){
    $arreglo = array(); 


foreach(Agrega($arreglo) as $dia => $arreglo){
    foreach($arreglo as $mes => $diaAA){
            echo '<ol>';
            echo '<h3>'; 
            if($dia == 1){
                echo $mes; 
            }else if($dia == 32){
                echo $mes;
            }
            else if($dia == 60){
                echo $mes;
            }else if($dia == 91){
                echo $mes;
            }else if($dia == 121){
                echo $mes;
            }else if($dia == 152){
                echo $mes;
            }else if($dia == 182){
                echo $mes;
            }else if($dia == 213){
                echo $mes;
            }else if($dia == 244){
                echo $mes;
            }else if($dia == 274){
                echo $mes;
            }else if($dia == 305){
                echo $mes; 
            }else if($dia == 335){
                echo $mes;
            }
            echo '</h3>';
            echo '</ol>';


        echo '<li>';
        echo 'El dia numero ' . $dia . ' del año 2019'; 
        echo ', corresponde al dia: ' . $diaAA; 
        echo '<br>'; 
        echo '</li>';
        
        
    }
    echo '<br>';

    
}


} 



resultados(); 