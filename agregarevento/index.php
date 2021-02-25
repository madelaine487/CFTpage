<?php $conex = mysqli_connect("localhost","root","","pruebalogin1"); ?>
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
    <title>Cpanel - CFT</title>
    <script src="jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
      <link rel="stylesheet" href="/includ/Cpanelv1/css/Cpanelcss.css">
  	<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  </head>
  <body>
   
   <script>
       
       
        function muestra_oculta(id){
        if (document.getElementById){ //se obtiene el id
        var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
        el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
        }
        }
        window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
        muestra_oculta('contenido');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
        }
      
   </script>
   <div class="top-bar">
    <p class="User-style">Bienvenido Matias</p>
</div>
<div class="menu-izquierdo">
    <ul>
       <img src="https://cftpucv.cl/wp-content/uploads/2020/10/logo-CFT-PUCV-con-catolica.png" class="log-crud">
       <br><br>
         <li class="li1"><a class="lk1" href="/includ/Cpanelv1/crudadmin.php">Inicio</a></li>
        <li class="li1"><a class="lk1" href="/includ/Cpanelv1/agregarevento/index.php">Registro</a></li>
        <li class="li1"><a class="lk1" href="">Mantenedores</a></li>
        <li class="li1"><a class="lk1" href="/includ/Cpanelv1/Busqueda/index.php">Buscador</a></li>
        <li class="li1"><a class="lk1" href="">Reportes</a></li>
        
    </ul>
</div>
<br>
<br>

<div class="container">

        <div  class="container-add-events" >
        <a style='cursor: pointer;' onClick="muestra_oculta('contenido')" title="" class="boton_mostrar">Ejecutantes y Asistentes +</a>
            
         <div id="contenido">      
            <hr>
            <p class="p1dxl">Ejecutantes Interno</p>
            
            <a href="#IrVentanaFlotante" class="Flotante-link">Agregar Ejecutante Interno</a>
            <div id="IrVentanaFlotante" class="modal">
              <div class="ventana">
                <a href="#" style='text-decoration:none; color:black;'>X</a>
                    <br><br>
                     <P>Agregar asistente interno</P>
                     <form action="registrar2.php" method="POST">
                         <input type="text" name="titulo" placeholder="Titulo">
                         <input type="text" name="descripcion" placeholder="Descripción">
                         <input type="text" name="niveldelogro" placeholder="Nivel de logro">
                         <input type="submit" name="Agregar" value="ADD">
                     </form>
              </div>  
            </div>

            
            
            

            <br><br>
            <table>
                  
                    <tr>
                      <td> ID </td>
                      <td>Titulo</td>
                      <td>Descripcion</td>
                      <td>Nivel de logro</td>
                      <td>Eliminar</td>
                    </tr>
                
                        
                              <?php 
                    $sql="SELECT * FROM addejecutanteinterno";
                    $result=mysqli_query($conex,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                        
                    
                   ?>
                 
                
                    <tr>
                      <td><?php echo $mostrar['id'] ?></td>
                      <td><?php echo $mostrar['titulo'] ?></td>
                      <td><?php echo $mostrar['descripcion'] ?></td>
                      <td><?php echo $mostrar['niveldelogro'] ?></td>
                      <td><a style="color:red;" href="eliminar.php?id=<?php echo $mostrar["id"];?>"><img src="http://contraloriadelmagdalena.gov.co/contratacion/imagenes/botones/eliminar.png" class="basurapng"></a></td>
                    </tr>
                    <?php 
                    }
                    ?>
                 
            </table>
                   
       <br><br><br>
       <p class="p1dxl">Asistentes Externos</p>
        <button type="button" class="buton-gtx13">Agregar Asistentes Externos</button>
       
           <div class="infnoexist-xf1">INFORMACION * No existe informacion Solicitada</div>
           
           <br> <br>
           
           
            <p class="p1dxl">Asistentes Internos</p>
        <button type="button" class="buton-gtx13">Agregar Asistentes Internos</button>
       
           <div class="infnoexist-xf1">INFORMACION * No existe informacion Solicitada</div>
       
    

       
        </div>
       
       
       
       
       
        </div>
</div>

    <div class="modalFrmEmployee"></div>
  </body>
  <script src="funcs.js"></script>
</html>
