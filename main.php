<?php
require 'DAO.php';
$dao = new DAO();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  $email = $_POST['femail'];
  $id = $_POST['fid'];

  if(!empty($name) && !empty($email)) {
    $dao->createUser($name, $email);
  }
  elseif(!empty($id)) {
    $dao->deleteUser($id);
  }
  else {
    echo "Fields cannot be empty!";
  }
}

$dao->displayUsers();
?>
