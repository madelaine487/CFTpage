<?php
    $conexion = mysqli_connect("localhost","root","","pruebalogin1");

    $id = $_GET['id'];
    $eliminar = "DELETE FROM addejecutanteinterno WHERE id = '$id'";

    $resultadoEliminar = mysqli_query($conexion,$eliminar);

    if ($resultadoEliminar) {
        header("Location:index.php");
    }else{
        echo "Error para eliminar";
    }


?>

