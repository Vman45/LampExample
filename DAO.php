<?php
class DAO {
  public $servername = "localhost";
  public $username = "test";
  public $password = "password";
  public $dbname = "test";

  public $conn = new mysqli($servername, $username, $password, $dbname);

  function displayUsers() {
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
?>
