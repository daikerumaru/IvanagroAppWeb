<?php

$filtro_beneficiario = 0;

if(isset($_POST['filtrar'])){

$filtro_beneficiario = $_POST['numero_beneficiario'];


}
if(isset($_POST['mostrar'])){

$filtro_beneficiario = 0;


}

if(isset($_POST['export'])){


header("Content-Type: text/csv; charset=utf-8");
header("Content-Disposition: attachment; filename=A20V2.csv");


$output = fopen("php://output","w");
    

fputcsv($output, ['Beneficiario', 'Razon Social', 'NIT', 'Ciudad', 'Dirección', 'Telefono', 'Nombre Contacto', 'Fecha programada', 'Efectivo', 'Observaciones']);

    
$query="SELECT * FROM a20v2";
$export_query=mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($export_query)){
        
       fputcsv($output, $row);
    
    
    }
    
    fclose($output); 
    


   
}
?>



 <form action="" method="post">
  <table class="table table-bordered table-hover"> 
  

<div class="cols-xs-6">
  <div class="well">

      <input name="numero_beneficiario" type="text" class="form-control" placeholder="Ingrese Numero de Beneficiario">
      <br>
      <input type="submit" class="btn btn-primary" name="filtrar" value="Filtrar">
      <input type="submit" class="btn btn-info" name="mostrar" value="Volver">
       <input type="submit" name="export" class="btn btn-success" value="Export to excel"/>
     
    </div>
   
  </div>
  <br>


    <thead>
        <tr>
            <th>BENEFICIARIO</th>
            <th>RAZON SOCIAL</th>
            <th>NIT</th>
            <th>CIUDAD</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>
            <th>NOMBRE CONTACTO</th>
            <th>FECHA PROGRAMADA</th>
            <th>EFECTIVA</th>
            <th>OBSERVACIONES</th>
            <th>EDITAR</th>
            </tr>
    </thead>
    <tbody>
      
      
      
       <?php 
        


        
        
        
        if($filtro_beneficiario >= 1 && $filtro_beneficiario < 9999 ){
        
        $query = "SELECT * FROM a20v2 where beneficiario={$filtro_beneficiario}";
        $select_beneficiarios1 = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($select_beneficiarios1)){
        
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
            
            

        echo "<tr>";
        echo "<td>$beneficiario</td>";
        echo "<td>$razonsocial</td>";
        echo "<td>$nit</td>";
        echo "<td>$ciudad</td>";
        echo "<td>$direccion</td>";
        echo "<td>$telefono</td>";    
        echo "<td>$nombrecontacto</td>";
        echo "<td>$fechaprogramada</td>";
        echo "<td>$estado</td>";  
        echo "<td>$observaciones</td>";
        echo "<td><a href='main.php?edit=a20v2&numero={$beneficiario}&actividad_editar={$actividad}'>Editar</a></td>";
        
      
             }      
      }else{
            
            
        $query = "SELECT * FROM a20v2";
        $select_beneficiarios2 = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_assoc($select_beneficiarios2)){
        
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
            
            

        echo "<tr>";
        echo "<td>$beneficiario</td>";
        echo "<td>$razonsocial</td>";
        echo "<td>$nit</td>";
        echo "<td>$ciudad</td>";
        echo "<td>$direccion</td>";
        echo "<td>$telefono</td>";    
        echo "<td>$nombrecontacto</td>";
        echo "<td>$fechaprogramada</td>";
        echo "<td>$estado</td>";  
        echo "<td>$observaciones</td>";
        echo "<td><a href='main.php?edit=a20v2&numero={$beneficiario}&actividad_editar={$actividad}'>Editar</a></td>";
             }
            
        }
           
       
        
      
      
      
      
      
       
      
        ?>
       
       
       
       
                
            
        </tr>
      
      
       </tbody>
         </table>
                   
                    
              </form>     
                  