<?php
require 'DAO.php';
$dao = new DAO();
$dao->getConnectionStatus();
$dao->displayUsers();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}

?>
