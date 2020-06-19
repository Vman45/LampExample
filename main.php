<?php
require 'DAO.php';
$dao = new DAO();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  $email = $_POST['femail'];
  $id = $_POST['fid'];

  if (empty($name) || empty($email)) {
    if(empty($id)) {
      echo "Fields cannot be empty!";
    }
    else  {
      $dao->deleteUser($id);
    }
  }
  else {
    $dao->createUser($name, $email);
  }
}
?>
