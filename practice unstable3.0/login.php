<?php
include("connection.php");


if (isset($_POST['Login'])) {
  $log_in_id= $_POST['id'];
  $log_in_password= $_POST['pass'];
    $log_in_type= $_POST['type'];

  if($log_in_id  == '')
  {
    echo "<script>alert ('Please enter id') </script>";
    echo "<script>window.open('./signin.php','_self') </script>";
    exit();
  }
  if($log_in_password  == '')
  {
    echo "<script>alert ('Please enter Password') </script>";
    echo "<script>window.open('./signin.php','_self') </script>";
    exit();
}
  $check_log_in =  "select * from account where id ='$log_in_id' and pass ='$log_in_password ' and type= '$log_in_type'";
  $return_login = mysqli_query($con, $check_log_in );

if (mysqli_num_rows($return_login) &&   $log_in_type == "admin") {
  session_start();
  $_SESSION['type']=$log_in_type;
  echo "<script>window.open('admindashboard.php','_self') </script>";
}
elseif (mysqli_num_rows($return_login) &&   $log_in_type == "prisoner") {
  session_start();
  $_SESSION['type']=$log_in_type;
  echo "<script>window.open('prisonerdashboard.php','_self') </script>";
}

else {
  echo "<script>alert('Wrong E-mail or Password')</script>";
  echo "<script>window.open('./signin.php','_self') </script>";
}
}
else {
  echo "<script>window.open('./signin.php','_self') </script>";
}

 ?>
