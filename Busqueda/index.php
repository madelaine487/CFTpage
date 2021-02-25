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
       
        <link rel="stylesheet" href="/includ/Cpanelv1/css/Cpanelcss.css">
        
        
        
        
        
            <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
<title>Cpanel - CFT</title>
<script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap core CSS -->
<link href="/includ/Cpanelv1/Busqueda/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="/includ/Cpanelv1/Busqueda/assets/css/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script type="text/javascript">
$(document).ready(function () {
   (function($) {
       $('#FiltrarContenido').keyup(function () {
            var ValorBusqueda = new RegExp($(this).val(), 'i');
            $('.BusquedaRapida tr').hide();
             $('.BusquedaRapida tr').filter(function () {
                return ValorBusqueda.test($(this).text());
              }).show();
                })
      }(jQuery));
});
</script> 

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
        <li><a class="lk1" href="/includ/Cpanelv1/Busqueda/index.php">Buscador</a></li>
        <li><a class="lk1" href="">Reportes</a></li>
        
    </ul>
</div>

<div class="container">

    <!-- Begin page content -->

<div>
 <h1 class="mt-5">Buscar a un Usuario</h1>
 <hr>
<?php
if(isset($_GET["option"])){?>
 <div class="alert alert-success" role="alert">
  <strong>Hecho!</strong> El registro ha sido guardado con exito.
</div>
<?php }?>
<div class="row">
  <div class="col-12 col-md-12">

   <!-- Contenido -->    
			

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">Buscar</span>
  </div>
  <input id="FiltrarContenido" type="text" class="form-control" placeholder="Ingrese Nombre de Alumno" aria-label="Alumno" aria-describedby="basic-addon1">
</div>
	    <table class="table table-hover">
        <thead>
          <tr>
            <th>Nº</th>
            <th>ID</th>
            <th>Titulo</th>            
            <th>Descripcion</th>
            <th>Nivel de Logro</th>
          </tr>
        </thead>
        <tbody class="BusquedaRapida">
<?php
include "db.php";
$con = connect();
$consulta = "SELECT * FROM addejecutanteinterno";
$resultado = mysqli_query($con , $consulta);
$contador=0;

while($misdatos = mysqli_fetch_assoc($resultado)){ $contador++;?>
<tr>
  <td><?php echo $contador; ?></td>
  <td><?php echo $misdatos["id"]; ?></td>
  <td><?php echo $misdatos["titulo"]; ?></td>
  <td><?php echo $misdatos["descripcion"]; ?></td>
  <td><?php echo $misdatos["niveldelogro"]; ?></td>
  </tr>
          
<?php }?>          

</tbody>
      </table>		
<!-- Fin Contenido --> 
</div>



</div><!-- Fin row -->


</div><!-- Fin container -->
    <footer class="footer">
      <div class="container">
        <span class="text-muted"><p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p></span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
    

</div>

  </body>
    <script src="/includ/Cpanelv1/cpanelinclud/agregar/funcs.js"></script>
    <script src="/includ/Cpanelv1/cpanelinclud/agregar/jquery-3.4.1.min.js"></script>
   
</html>