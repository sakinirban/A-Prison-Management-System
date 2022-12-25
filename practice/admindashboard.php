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


</body>
</html>
