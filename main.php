<?php
require 'DAO.php';
$dao = new DAO();
$dao->getConnectionStatus();
$dao->displayUsers();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  $email = $_POST['femail'];
  if (empty($name) || empty($email)) {
    echo "Fields cannot be empty!";
  } else {
    echo $name;
    echo $email;
    $id = strval(uniqid());
    $dao->createUser($name, $email);
  }
}

?>
