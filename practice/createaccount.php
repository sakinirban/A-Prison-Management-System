<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create Account</title>
  </head>
  <body>
    <p>Create a Account</p>
    <form class="box" action="createaccountphp.php" method="post">
      <div class="form-group">
        <label for="exampleInputforprisoner">Create ID</label>
        <input type="text" class="form-control" id="exampleInputforprisoner" name="id" aria-describedby="20xx1xx" placeholder="Enter ">
        <small id="orehVai" class="form-text text-muted">Please Follow the iD making Rules</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputforprisoner">Type</label>
        <input type="text" class="form-control" id="exampleInputforprisoner" name="type" aria-describedby="20xx1xx" placeholder="Enter ">
        <small id="orehVai" class="form-text text-muted">Please Follow the Type making Rules</small>
      </div>

    <input type="submit"  name="submit" value="Submit">

    </form>

  </body>
</html>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="createprisoner.php">Create a Profile for Prisoner</a> <br>


    <a href="createadmin.php">Create a Profile for Admin</a>  <br>
  </body>
</html>
