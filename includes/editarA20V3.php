<?php
 
 if(isset($_GET['numero'])){
        
        $numero = $_GET['numero'];
       
     }


        $query = "SELECT * FROM a20v3 where beneficiario={$numero}";
        $select_info_beneficiarios = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($select_info_beneficiarios)){
        
        $beneficiario =   $row['beneficiario'];
        $razonsocial =   $row['razonsocial'];
        $nit =   $row['nit'];
        $ciudad =   $row['ciudad'];
        $direccion =   $row['direccion'];
        $telefono =   $row['telefono'];
        $nombrecontacto =   $row['nombrecontacto'];
        $fechaprogramada =   $row['fechaprogramada'];
        $estado =   $row['estado'];
        $observaciones =   $row['observaciones'];
            
             }

if(isset($_POST['actualizarUsuario'])){
    
    $fecha_new = $_POST['fechaprogramada'];
    $efectivo_new = $_POST['efectiva-estado'];
    $observaciones_new = $_POST['observaciones_editar'];
        
$query = "UPDATE a20v3 SET ";
$query .= "fechaprogramada = '{$fecha_new}', ";
$query .= "estado = '{$efectivo_new}', ";
$query .= "observaciones = '{$observaciones_new}' ";
$query .= "WHERE beneficiario = '{$beneficiario}' ";
    
    $actualizarUsuario = mysqli_query($connection,$query);
    
      
       if(!$actualizarUsuario){
        
        die('QUERY FAILED' . mysqli_error($connection));
    }
    
    echo "<p class='bg-success'>Mipyme actualizada correctamente.<a href='./main.php?actividad=A20V3'> Volver </a>";
    
}
            
?>
  
   <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="beneficiario-titulo"><?php echo "BENEFICIARIO: " . $beneficiario;?></label>
        
    </div>
     <div class="form-group">
        <label for="razonsocial-titulo"><?php echo "RAZON SOCIAL: " . $razonsocial;?></label>
    </div>
    
     <div>
         <label for="fechaprogramada-titulo"><?php echo "FECHA PROGRAMADA "  ;?> <br>
    </label>
        <input type="date" name="fechaprogramada" value=   "<?php echo $fechaprogramada;?>" >
        
         
     </div>
     <br>
        <div>
         <label for="estado-titulo">EFECTIVA</label>
         <select name="efectiva-estado" id="">
            <option value="<?php echo $estado; ?>"><?php echo $estado; ?></option>
              <?php
                     
         if($estado == 'NO'){
                 
             echo "<option value='Si'>Si</option>";
                     
         } elseif($estado == 'SI') {
             
              echo "<option value='NO'>NO</option>";
             
         } else{
             
             echo "<option value='NO'>Seleccione una opción</option>";
             
         }
                     ?>
         </select>
     </div>
    <br>
    <div>
         <label for="observaciones"><?php echo "OBSERVACIONES";?></label>
          <textarea type="text" class="form-control" name="observaciones_editar" id="body" cols="30" rows="3"><?php echo $observaciones; ?></textarea><br>
     </div>
     <div class="form-group">
        <input class="btn btn-primary" type="submit" name="actualizarUsuario" value="Actualizar Usuario" >
    </div>
      
  
    
</form>
