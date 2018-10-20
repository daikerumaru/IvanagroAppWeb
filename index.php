<style>
 body{
    background-image: url(images/inicio.png);
    background-size: 100%;
    background-repeat: no-repeat;
    width: 100%;
    height: auto;
   }
</style>

<?php  include "includes/header.php"; ?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- Login -->
<div>
<form action="includes/login.php" method="post">

   
   <div class="col-lg-20">
   
    <h1 style="color: white">Login</h1>
    
</div>
<br>
<div class="col-lg-8 form-group">
    <br>
    <input name="username" type="text" class="form-control" placeholder="Ingrese Usuario">
    <br>
    <input name="password" type="password" class="form-control" placeholder="Ingrese Contraseña">
    <br>
    <button class="btn btn-primary" name="login" type="submit">Ingresar</button>
   
</div>


</form><!-- search form-->

<!-- /.input-group -->
</div>


<?php include "includes/footer.php"; ?>