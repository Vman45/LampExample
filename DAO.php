<?php
// DATA ACCESOR OBJECT
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
    $this->createConnection();
  }

  public function createUser($name, $email) {
    $sql = "SELECT id FROM users WHERE name='$name'";
    $result = mysqli_query($this->conn, $sql);

    if($result->num_rows == 0) {
      $id = md5(uniqid(rand(), true));

      $sql = "INSERT INTO users (id, name, email) VALUES ('$id', '$name', '$email')";

      if ($this->conn->query($sql) === TRUE) {
        echo "<div class='success'>Success: new user created</div>";
      }
      else {
        echo "<div>Error: " . $sql . $this->conn->error . "</div>";
      }
    }
    else {
      echo "<div class='error'>Error: user already exists </div>";
    }
  }

  public function deleteUser($id) {
    $sql = "SELECT id FROM users WHERE id='$id'";
    $result = mysqli_query($this->conn, $sql);

    if($result->num_rows != 0) {
      $sql = "DELETE FROM users WHERE id='$id'";

      if ($this->conn->query($sql) === TRUE) {
        echo "<div class='success'>Success: user deleted successfully</div>";
      }
      else {
        echo "<div class='error'>Error: " . $sql . $this->conn->error . "</div>";
      }
    }
    else {
      echo "<div class='error'>Error: user does not exist</div>";
    }
  }

  public function displayUsers() {
    $sql = "SELECT * FROM users";
    $result = mysqli_query($this->conn, $sql);
    echo "<h2 class='text-center'> Table of Users </h2>";
    echo "<table class='table'>";
    echo "<thead class='thead-dark'> <tr> <th>ID</th> <th>NAME</th> <th>EMAIL</th> </tr> </thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      foreach ($row as $field => $value) {
        echo "<td>" . $value . "</td>";
      }
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  }

  public function createConnection() {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  }

  public function closeConnection() {
    $this->conn->close();
  }
}
?>
