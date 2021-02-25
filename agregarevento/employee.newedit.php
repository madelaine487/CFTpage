<?php
require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$id = $_GET['id'];
if($id>0){
  $result = $objDB->Execute("SELECT * FROM crud_employees WHERE id=$id");
  $employee = $result->fetch_assoc();
}
?>

  <form id="frmEmployee" class="form">
    <input type="hidden" name="id" value="<?= $id ?>" />
    <label>
      Nombres
      <input type="text" name="nombres" value="<?php if(isset($employee)) echo $employee['names'] ?>" required />
    </label>
    <label>
      Dirección
      <input type="text" name="direccion" value="<?php if(isset($employee)) echo $employee['address'] ?>" />
    </label>
    <label>
      Fecha registro
      <input type="date" name="fecha_registro" value="<?php if(isset($employee)) echo $employee['date_register'] ?>" />
    </label>
    <label>
      Teléfono
      <input type="tel" name="telefono" value="<?php if(isset($employee)) echo $employee['phone'] ?>" />
    </label>
    <label>
      Salario
      <input type="number" name="salario" value="<?php if(isset($employee)) echo $employee['salary'] ?>" step=".01" />
    </label>
    <label>
      Comentario
      <textarea name="comentario"><?php if(isset($employee)) echo $employee['comment'] ?></textarea>
    </label>
    <button class="button" type="submit">Guardar datos</button>
  </form>
  <a class="hideForm" href="#">Cerrar</a>
