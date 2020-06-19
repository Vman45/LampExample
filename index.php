<html>
  <body>
    <h1>LAMP Stack Example</h1>

    <?php require 'connectionStatus.php';?>


    <h2>Create User</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Name: <input type="text" name="fname">
      Email: <input type="text" name="femail">
      <input type="submit" value="Create User">
    </form>

    <h2>Delete User</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      ID: <input type="text" name="fid">
      <input type="submit" value="Delete User">
    </form>

    <?php require 'table.php';?>




  </body>
</html>
