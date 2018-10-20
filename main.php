<?php ob_start(); ?>
<?php  include "includes/header.php"; ?>
<?php  include "includes/db.php";?>
<?php // include "includes/function.php";?>
 
<?php

$actividadcontrolbox = "Select Options";

if(isset($_POST['submit'])){
    
   $actividad_id = $_POST['bulk_options'];
    
  header("Location: main.php?actividad={$actividad_id}");
    
    
}




?>


<div id="wrapper">
 <div id="page-wrapper">

            <div class="container-fluid">
            <!-- Page Heading -->
                        
                <div class="row">
                         
                 <div class="col-lg-12">
                     <div class="page-header">
                      <img  class='img-responsive'src="images/banner.gif" alt="banner">
                           
                     <h1>
                            Bienvenido
                            <small>Ivanagro
                             </small>
                        </h1>
                      </div>  
<?php                    
if(isset($_GET['actividad'])){
    
    $actividadcombobox = $_GET{'actividad'};
    
    switch($actividadcombobox){

        case 'A16V1';
                                    
        $actividadcontrolbox = "A16 Visita 1";                               
        break;
        
        case 'A16V2';
        $actividadcontrolbox = "A16 Visita 2";
        
        break;
    
        case 'A18V1';
        $actividadcontrolbox = "A18 Visita 1";
        
        break;
        
        case 'A18V2';
        $actividadcontrolbox = "A18 Visita 2";
        
        break;
        
        case 'A20V1';
        $actividadcontrolbox = "A20 Visita 1";
        
        break;
        
        case 'A20V2';
        $actividadcontrolbox = "A20 Visita 2";
        
        break;
                                    
        case 'A20V3';
        $actividadcontrolbox = "A20 Visita 3";
        
        break;
    
        case 'A24V1';
        $actividadcontrolbox = "A24 Visita 1";
        
        break;
        
        case 'A24V2';
        $actividadcontrolbox = "A24 Visita 2";
        
        break;
        
        default:
        
        echo "SELECCIONE UNA ACTIVIDAD";
        


   
                          } 
    
}
?>
<form action="main.php" method="post">
                          
   <div id="bulkOptionsContainer" class="col-xs-4 form-group">
                          
  <select class="form-control" name="bulk_options" id="">
      <option value="<?php echo $actividadcombobox; ?>"><?php echo  $actividadcontrolbox; ?></option>
      <option value="A16V1">A16 Visita 1</option>
      <option value="A16V2">A16 Visita 2</option>
      <option value="A18V1">A18 Visita 1</option>
      <option value="A18V2">A18 Visita 2</option>
      <option value="A20V1">A20 Visita 1</option>
      <option value="A20V2">A20 Visita 2</option>
      <option value="A20V3">A20 Visita 3</option>
      <option value="A24V1">A24 Visita 1</option>
      <option value="A24V2">A24 Visita 2</option>
  </select>
  <br>
  <input type="submit" name="submit" class="btn btn-primary" value="Apply">
 

</div>

 </form> 
                    

                    </div>
                </div>
                <!-- /.row -->
                
                
                <?php 
                        
                 if(isset($_GET['actividad'])){
        
        $actividad = $_GET['actividad']; 
        
                     
                      
                            switch($actividad){

        case 'A16V1';
                                    
        include "includes/A16V1.php";                                
        break;
        
        case 'A16V2';
        include "includes/A16V2.php";
        
        break;
    
        case 'A18V1';
        include "includes/A18V1.php";
        
        break;
        
        case 'A18V2';
        include "includes/A18V2.php";
        
        break;
        
        case 'A20V1';
        include "includes/A20V1.php";
        
        break;
        
        case 'A20V2';
        include "includes/A20V2.php";
        
        break;
                                    
        case 'A20V3';
        include "includes/A20V3.php";
        
        break;
    
        case 'A24V1';
        include "includes/A24V1.php";
        
        break;
        
        case 'A24V2';
        include "includes/A24V2.php";
        
        break;
        
        default:
        
        echo "SELECCIONE UNA ACTIVIDAD";
        


   
                          }  
                            
                        }
                
                if(isset($_GET['edit'])){
        
        $edit = $_GET['edit'];
                    
        
        switch($edit){

        case 'a16v1';
                                    
        include "includes/editarA16V1.php";                                
        break;
                
        case 'a16v2';
                                    
        include "includes/editarA16V2.php";                                
        break;
                
        case 'a18v1';
                                    
        include "includes/editarA18V1.php";                                
        break;
                
        case 'a18v2';
                                    
        include "includes/editarA18V2.php";                                
        break;
        
        case 'a20v1';
                                    
        include "includes/editarA20V1.php";                                
        break;
                
        case 'a20v2';
                                    
        include "includes/editarA20V2.php";                                
        break;
                
        case 'a20v3';
                                    
        include "includes/editarA20V3.php";                                
        break;
        
        case 'a24v1';
                                    
        include "includes/editarA24V1.php";                                
        break;
                
        case 'a24v2';
                                    
        include "includes/editarA24V2.php";                                
        break;
        default:
        
        echo "SELECCIONE UNA ACTIVIDAD";
        


   
                          }  
                                        
     }

                        

 
?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->



































<?php include "includes/footer.php"; ?>