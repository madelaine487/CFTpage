<?php
header('Content-type: application/json; charset=utf-8');

require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$id = $_POST['id'];

$employee_data = [
	'names' => $_POST['nombres'],
	'address' => $_POST['direccion'],
	'date_register' =>  $_POST['fecha_registro'],
	'phone' => $_POST['telefono'],
	'comment' => $_POST['comentario'],
	'salary' => $_POST['salario']
];

if($id==0){ // Nuevo
	$r = $objDB->Insert('crud_employees', $employee_data);
	if($r['result']){
		$arr = ['resultado' => true, 'mensaje' => 'Empleado añadido', 'id' => $r['insert_id'] ];
	}else{
		$arr = ['resultado' => false, 'mensaje' => $r['error']];
	}
}else{ // Update
	$r = $objDB->Update('crud_employees', $employee_data, ["id" => $id]);
	if($r['result']){
		$arr = ['resultado' => true, 'mensaje' => 'Empleado actualizado' ];
	}else{
		$arr = ['resultado' => false, 'mensaje' => $r['error']];
	}
}
die(json_encode($arr));
