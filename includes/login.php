<?php ob_start(); ?>
<?php session_start(); ?>




<?php 


if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];
    

    if($username == "ivanagro" && $password == "ivanagro") {
        
    $_SESSION['username'] = $username;  
    
        header("Location: ../main.php"); 
        
    }
           
     
     else {
        
      header("Location: ../index.php"); 
        
    }
    
    
}



?>


