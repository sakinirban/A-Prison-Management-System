<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>



<?php
session_start();
if(!isset($_SESSION['type'])){
  header("location:.login.php");
}
 ?>
<h3>Welcome <?php echo $_SESSION['type']; ?></h3>
include("connection.php");

<p>Amalnama Adding</p>
<form class="box" action="amalnama.php" method="post">
  <div class="form-group">
    <label for="exampleInputforprisoner">Prisoner ID</label>
    <input type="text" class="form-control" id="exampleInputforprisoner" name="id" aria-describedby="20xx1xx" placeholder="Enter ">
    <small id="orehVai" class="form-text text-muted">New record</small>
  </div>

  <div class="form-group">
    <label for="exampleInputforprisoner">Actcode</label>
    <input type="text" class="form-control" id="exampleInputforprisoner" name="type" aria-describedby="20xx1xx" placeholder="Enter ">
    <small id="orehVai" class="form-text text-muted">Actcode</small>
  </div>

<input type="submit"  name="submit" value="Submit">

</form>

$insert_account= "insert into amalnama (andiary,pid, actcode) values ('Null', '$id', '$actcode')";}
</body>
</html>
