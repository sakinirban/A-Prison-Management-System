<?php
include("connection.php");

if (isset($_POST['submit'])) {
  $pid = $_POST['id'];
  $password= $_POST['pass'];
    $type= $_POST['type'];


  if($pid  == '')
  {
    echo "<script>alert ('Please enter id') </script>";
    echo "<script>window.open('./jailer.php','_self') </script>";
    exit();
  }


if($password  == '')
{
  echo "<script>alert ('Please enter Password') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}

if($type  == '')
{
  echo "<script>alert ('Please enter Password') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}


$check_email = "select * from account where id ='$pid'";
$result = mysqli_query($con,$check_email );
if (mysqli_num_rows($result)>0) {
    echo "<script>alert ('PID $pid Already Exist....') </script>";
    echo "<script>window.open('./jailer.php','_self') </script>";
    exit();

}
else {

  $insert_account= "insert into account (id, pass, type) values ('$pid', '$password', '$type' )";
if (mysqli_query($con,$insert_account )) {
 echo "<script>window.open('jailer.php','_self') </script>";
}
}
}
else {
  echo "<script>window.open('./createaccount.php','_self') </script>";
}
?>
