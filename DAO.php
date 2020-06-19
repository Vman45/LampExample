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

  public function getConnectionStatus() {
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
    echo "<p> Connected successfully to database! </p>";
  }

  public function createUser($id, $name, $email) {
    $sql = "INSERT INTO users (id, name, email) VALUES ('$id', '$name', '$email')";

    if ($this->conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $this->conn->error;
    }
  }

  public function displayUsers() {
    $sql = "SELECT * FROM users";
    $result = mysqli_query($this->conn, $sql);
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr> <td>id</td> <td>name</td> <td>email</td> </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      foreach ($row as $field => $value) {
        echo "<td>" . $value . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }

  public function closeConnection() {
    $this->conn->close();
  }


}
?>
