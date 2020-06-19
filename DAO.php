<?php
class DAO {
  // const SERVERNAME = "localhost";
  // const USERNAME = "test";
  // const PASSWORD = "password";
  // const DBNAME = "test";
  // const CONNECTION = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

  function displayUsers() {
    $servername = "localhost";
    $username = "test";
    $password = "password";
    $dbname = "test";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    echo "<br>";
    echo "<table border='1'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $field => $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
  }
}

$dao = new DAO();
$dao.displayUsers();

// class DAO {
//   // Properties
//   public $name;
//   public $color;
//
//   // Methods
//   function set_name($name) {
//     $this->name = $name;
//     echo $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }
//
// $apple = new DAO();
// $banana = new DAO();
// $apple->set_name('Apple');
// $banana->set_name('Banana');
//
// echo $apple->get_name();
// echo "<br>";
// echo $banana->get_name();

?>
