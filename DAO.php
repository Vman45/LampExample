<?php
class DAO {
  private $servername;
  private $username;
  private $password;
  private $dbname;
  private $conn;

  public function __construct() {
    $this->servername = "localhost";
    $this->username = "test";
    $this->password = "password";
    $this->dbname = "test";
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  }

  public function createUser($name, $email) {

  }

  public function displayUsers() {
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

  public function getConnectionStatus() {
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
    echo "<p> Connected successfully to database! </p>";
  }

  public function closeConnection() {
    $this->conn->close();
  }


}
?>
