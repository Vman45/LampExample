<?php
// MAIN CODE
require 'DAO.php';
$dao = new DAO();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST['fname']);
  $email = trim($_POST['femail']);
  $id = trim($_POST['fid']);

  if(!empty($name) && !empty($email)) {
    $dao->createUser($name, $email);
  }
  elseif(!empty($id)) {
    $dao->deleteUser($id);
  }
  else {
    echo "<div>Fields cannot be empty!</div>";
  }
}

$dao->displayUsers();
?>
