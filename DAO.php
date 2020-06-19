<?php
class DAO {
  public $servername;
  public $username;
  public $password;
  public $dbname;
  public $conn;

  public function __construct()
  {
    $this->servername = "localhost";
    $this->username = "test";
    $this->password = "password";
    $this->dbname = "test";
  }

  function displayUsers() {
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

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
