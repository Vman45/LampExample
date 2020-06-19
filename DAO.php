<?php
class DAO {
  $servername = "localhost";
  $username = "test";
  $password = "password";
  $dbname = "test";

  $conn = new mysqli($servername, $username, $password, $dbname);

  function displayUsers() {
    $sql = "SELECT * FROM users";
    $result = mysqli_query($this->conn, $sql);
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
