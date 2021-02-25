<!-- LOGIN Y REGISTRO  -->
<!-- V.01 -->
<!-- CREADOR -->
<!-- JHONATAN CARDONA --><!-- PRORAMADOR SOFTWARE --><!-- 2018 --><!-- copyright 2018- 2038 -->

<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.html");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>

<html>
  <head>
    <meta charset="utf-8" class="jhontastic">
    <title>Cpanel - Administrador</title>
       
        <link rel="stylesheet" href="css/Cpanelcss.css">

  </head>




<body>

<div class="top-bar">
    <p class="User-style">Bienvenido <?php echo $_SESSION['user'] ?></p>
    
</div>
<div class="menu-izquierdo">
    <ul>
       <img src="https://cftpucv.cl/wp-content/uploads/2020/10/logo-CFT-PUCV-con-catolica.png" class="log-crud">
       <br><br>
         <li><a class="lk1" href="/includ/Cpanelv1/crudadmin.php">Inicio</a></li>
        <li><a class="lk1" href="/includ/Cpanelv1/agregarevento/index.php">Registro</a></li>
        <li><a class="lk1" href="">Mantenedores</a></li>
        <li><a class="lk1" href="Busqueda/index.php">Buscador</a></li>
        <li><a class="lk1" href="">Reportes</a></li>
        
    </ul>
</div>

<div class="container">



    
    
  agregar

</div>

  </body>
    <script src="/includ/Cpanelv1/cpanelinclud/agregar/funcs.js"></script>
    <script src="/includ/Cpanelv1/cpanelinclud/agregar/jquery-3.4.1.min.js"></script>
   
</html>