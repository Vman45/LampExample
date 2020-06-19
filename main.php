<?php
require 'DAO.php';
$dao = new DAO();
$dao->getConnectionStatus();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  $email = $_POST['femail'];
  if (empty($name) || empty($email)) {
    echo "Fields cannot be empty!";
  } else {
    $dao->createUser($name, $email);
  }
}

$dao->displayUsers();

?>
