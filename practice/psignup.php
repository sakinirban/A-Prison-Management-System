<?php
include("connection.php");

if (isset($_POST['registration'])) {
  $pid = $_POST['pid'];
  $user_fname =$_POST['fname'];
  $user_lname =$_POST['lname'];
  $connvicted=$_POST['res'];

  if($pid  == '')
  {
    echo "<script>alert ('Please enter id') </script>";
    echo "<script>window.open('./jailer.php','_self') </script>";
    exit();
  }

  if($user_fname  == '')
  {
    echo "<script>alert ('Please enter first name') </script>";
    echo "<script>window.open('./jailer.php','_self') </script>";
    exit();
  }
if($user_lname  == '')
{
  echo "<script>alert ('Please enter last Name') </script>";
  echo "<script>window.open('./jailer.php','_self') </script>";
  exit();
}


if($connvicted  == '')
{
  echo "<script>alert ('Please enter the why he is convicted') </script>";
  echo "<script>window.open('./jailer.php','_self') </script>";
  exit();
}


$check_email = "select * from prisoner where pid ='$pid'";
$result = mysqli_query($con,$check_email );
if (mysqli_num_rows($result)>0) {
    echo "<script>alert ('PID $pid Already Exist....') </script>";
    echo "<script>window.open('./jailer.php','_self') </script>";
    exit();

}
else {

  $insert_account=
   "insert into prisoner (pid, fname,lname,convictedfor) values ('$pid','$user_fname', '$user_lname' , '$connvicted')";
if (mysqli_query($con,$insert_account )) {
 echo "<script>window.open('jailer.php','_self') </script>";
}
}
}
else {
  echo "<script>window.open('./createprisoner.php','_self') </script>";
}
?>
