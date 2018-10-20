<?php /*

$db['db_host']= 'localhost';
$db['db_user']= 'root';
$db['db_pass']= '';
$db['db_name']= 'ivanagroweb';

foreach($db as $key => $value){
    
define(strtoupper($key), $value);    
    
}

    
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); */




$db['db_host']= 'localhost';
$db['db_user']= 'id7206954_ivanagro';
$db['db_pass']= 'ivanagro';
$db['db_name']= 'id7206954_ivanagro';

foreach($db as $key => $value){
    
define(strtoupper($key), $value);    
    
}

    
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

/*
if($connection){
    
        echo "We are connected";
    
} else {
    
    
    echo "NOOO";
    
}
*/

?>