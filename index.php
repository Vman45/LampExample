<html>

  <head>

    <title>LAMP Stack</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  <body>

    <div class="container">

      <h1 class="text-center">LAMP Stack Example</h1>

      <h2 class="text-center">Create User</h2>

      <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <div class="form-group row">
          <label for="inputName" class="col-sm-1 col-form-label">Name</label>
          <div class="col-sm-11">
            <input class="form-control" id="inputName" placeholder="Full Name" type="text" name="fname">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
          <div class="col-sm-11">
            <input class="form-control" id="inputEmail" placeholder="Email" type="email" name="femail">
          </div>
        </div>

        <div class="form-group row">
          <div class="offset-sm-1 col-sm-11">
            <input type="submit" value="Create User" class="btn btn-primary"/>
          </div>
        </div>

      </form>

      <h2 class="text-center">Delete User</h2>

      <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <div class="form-group row">
          <label for="inputID" class="col-sm-1 col-form-label">ID</label>
          <div class="col-sm-11">
            <input class="form-control" id="inputID" placeholder="ID" type="text" name="fid">
          </div>
        </div>

        <div class="form-group row">
          <div class="offset-sm-1 col-sm-11">
            <input type="submit" value="Delete User" class="btn btn-primary">
          </div>
        </div>

      </form>

      <?php require 'main.php';?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>

</html>
