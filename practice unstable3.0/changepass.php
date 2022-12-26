<?php
include("connection.php");


if (isset($_POST['submit'])) {
  $pid = $_POST['id'];

    $type= $_POST['type'];




 $sql = ("UPDATE 'account' SET 'pass'='$type' WHERE 'id'=$pid");

 //$result= mysqli_query($con,$sql) or die();

}

?>
