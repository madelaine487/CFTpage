<?php 


$conex = mysqli_connect("localhost","root","","pruebalogin1"); 

if (isset($_POST['Agregar'])) {
    if (strlen($_POST['titulo']) >= 1 && strlen($_POST['descripcion']) >= 1 && strlen($_POST['niveldelogro']) >= 1) {
	    $titulo = trim($_POST['titulo']);
	    $descripcion = trim($_POST['descripcion']);
        $niveldelogro = trim($_POST['niveldelogro']);
	    $consulta = "INSERT INTO addejecutanteinterno(titulo, descripcion, niveldelogro) VALUES ('$titulo','$descripcion','$niveldelogro')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok"><?php header("Location:index.php");
                ?></h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>