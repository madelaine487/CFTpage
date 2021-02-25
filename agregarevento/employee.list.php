<?php
require_once 'dbconnect/database.class.php';

$objDB = new DataBase;

$result = $objDB->Execute('SELECT * FROM crud_employees');

while($employee = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?= $employee['names'] ?></td>
    <td><?= $employee['address'] ?></td>
    <td><?= $employee['date_register'] ?></td>
    <td><?= $employee['phone'] ?></td>
    <td><?= $employee['salary'] ?></td>
    <td><?= $employee['comment'] ?></td>
    <td>
      <a class="edit" data-id="<?= $employee['id'] ?>" href="#">Editar</a>
      <a class="delete" data-id="<?= $employee['id'] ?>" href="#">Eliminar</a>
    </td>
  </tr>
  <?php
}
?>
