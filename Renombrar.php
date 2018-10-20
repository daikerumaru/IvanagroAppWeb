<?php

$db['db_host']= 'localhost';
$db['db_user']= 'root';
$db['db_pass']= '';
$db['db_name']= 'fticm';

foreach($db as $key => $value){
    
define(strtoupper($key), $value);    
    
}

    
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


if($connection){
    
        echo "We are connected";
    
}


$query = "SELECT codigo FROM d10";
$select_codigo = mysqli_query($connection,$query);

$name = 0;
 
while($row = mysqli_fetch_assoc($select_codigo)){

 
    
    $codigo =   $row['codigo'];
   
    
$name = $name + 1;
    
    
    rename("C:/IVANAGROD/10/a10_" . $name . ".pdf","C:/IVANAGROD/10/" . $codigo . ".pdf");
  
      
}  

?>

