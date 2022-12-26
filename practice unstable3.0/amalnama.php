<?php
include("connection.php");

if (isset($_POST['submit'])) {
  $pid = $_POST['id'];

    $type= $_POST['type'];


  if($pid  == '')
  {
    echo "<script>alert ('Please enter id') </script>";
    echo "<script>window.open('./jailer.php','_self') </script>";
    exit();
  }




if($type  == '')
{
  echo "<script>alert ('Please enter Password') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}


$insert_account= "insert into 'amalnama' (andiary,pid,actcode) values ('NULL','$pid', '$type' )";
$result= mysqli_query($con,$insert_account)or die();


}
?>
