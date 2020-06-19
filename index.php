<html>
  <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Name: <input type="text" name="fname">
      Email: <input type="text" name="femail">
      <input type="submit">
    </form>

    <?php require 'main.php';?>

  </body>
</html>
