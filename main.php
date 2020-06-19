<?php
require 'DAO.php';
$dao = new DAO();
$dao->getConnectionStatus();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  $email = $_POST['femail'];
  $id = $_POST['fid'];
  if (empty($name) || empty($email)) {
    if(empty($id)) {
      echo "Fields cannot be empty!";
    }
    else  {
      echo "delete user";
    }
  }
  else {
    $dao->createUser($name, $email);
  }
}

$dao->displayUsers();

?>
