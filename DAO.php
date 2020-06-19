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
    createConnection();
  }

  public function getConnectionStatus() {
    createConnection();

    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
    echo "<p> Connected successfully to database! </p>";

    closeConnection();
  }

  public function createUser($id, $name, $email) {
    createConnection();

    $sql = "INSERT INTO users (id, name, email) VALUES ('$id', '$name', '$email')";

    if ($this->conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $this->conn->error;
    }

    closeConnection();
  }

  public function userWithNameExists($name) {
    createConnection();

    $sql = "SELECT id FROM users WHERE name='$name'";
    $result = mysqli_query($this->conn, $sql);
    if($result->num_rows == 0) {
      echo 'user does not exist'
    } else {
      echo 'user exists'
    }

    closeConnection();
  }

  public function displayUsers() {
    createConnection();

    $sql = "SELECT * FROM users";
    $result = mysqli_query($this->conn, $sql);
    echo "<br>";
    echo "<table border='1'>";
    echo "<tr> <th>ID</th> <th>NAME</th> <th>EMAIL</th> </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      foreach ($row as $field => $value) {
        echo "<td>" . $value . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";

    closeConnection();
  }

  public function createConnection() {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  }

  public function closeConnection() {
    $this->conn->close();
  }


}
?>
