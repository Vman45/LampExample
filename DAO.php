<?php
class DAO {
  const SERVERNAME = "localhost";
  const USERNAME = "test";
  const PASSWORD = "password";
  const DBNAME = "test";
  const CONNECTION = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

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
