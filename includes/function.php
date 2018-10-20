<?php


function actividad(){
    
    global $actividad;
    
         switch($actividad){

        case 'A16';
                                    
        include "includes/A16.php";                                
        break;
        
        case 'A18';
        include "includes/A18.php";
        
        break;
    
        case 'A20';
        include "includes/A20.php";
        
        break;
        
        case 'A24';
        include "includes/A24.php";
        
        break;
    
        default:
        
        echo "SELECCIONE UNA ACTIVIDAD";
        


        }
    
    
}




?>