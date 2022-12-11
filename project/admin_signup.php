<?php
include("connect.php");

if (isset($_POST['registration'])) {
  $email= $_POST['Email'];
  $user_name =$_POST['name'];
  $password= $_POST['password'];
  $phnnum= $_POST['Phone-Number'];
  $gen=$_POST['gender'];
  $dept=$_POST['department'];
  $bm=$_POST['bmdc'];
  $add=$_POST['address'];
  $fe=$_POST['fee'];
  $apti=$_POST['apptime'];
  $appdays=$_POST['appdays'];
if($user_name  == '')
{
  echo "<script>alert ('Please enter Full Name') </script>";
  echo "<script>window.open('./dRegistration.php','_self') </script>";
  exit();
}

if($email  == '')
{
  echo "<script>alert ('Please enter Email') </script>";
  echo "<script>window.open('./dRegistration.php','_self') </script>";
  exit();
}
if($phnnum  == '')
{
  echo "<script>alert ('Please enter Phone Number') </script>";
  echo "<script>window.open('./dRegistration.php','_self') </script>";
  exit();
}
if($bm == '')
{
  echo "<script>alert ('Please enter your BMDC') </script>";
  echo "<script>window.open('./dRegistration.php','_self') </script>";
  exit();
}
if($add == '')
{
  echo "<script>alert ('Please enter Address') </script>";
  echo "<script>window.open('./dRegistration.php','_self') </script>";
  exit();
}
if($fe == '')
{
  echo "<script>alert ('Please enter Fee') </script>";
  echo "<script>window.open('./dRegistration.php','_self') </script>";
  exit();
}
if($dept  == '')
{
  echo "<script>alert ('Please enter Department') </script>";
  echo "<script>window.open('./dRegistration.php','_self') </script>";
  exit();
}
if($gen  == '')
{
  echo "<script>alert ('Please enter Gender') </script>";
  echo "<script>window.open('./dRegistration.php','_self') </script>";
  exit();
}
if($password == '')
{
  echo "<script>alert ('Please enter Password') </script>";
  echo "<script>window.open('./dRegistration.php','_self') </script>";
  exit();
}
if($apti  == '')
{
  echo "<script>alert ('Please enter Appoinment time') </script>";
  echo "<script>window.open('./dRegistration.php','_self') </script>";
  exit();
}
if($appdays  == '')
{
  echo "<script>alert ('Please Your Appointment Days') </script>";
  echo "<script>window.open('./dRegistration.php','_self') </script>";
  exit();
}
$check_email = "select * from doctor where Email ='$email'";

$result = mysqli_query($conn,$check_email );
if (mysqli_num_rows($result)>0) {
    echo "<script>alert ('Email $email Already Exist....') </script>";
    echo "<script>window.open('./dRegistration.php','_self') </script>";
    exit();
}
else {
  $insert_user = "insert into doctor(Name,password,Bmdc,Gender,Email,Dept,Address,Phone,Appointment,Appointmentday,fee) value
  ('$user_name','$password','$bm','$gen','$email','$dept','$add','$phnnum','$apti','$appdays','$fe')";
   if (mysqli_query($conn,$insert_user )) {
    echo "<script>window.open('./drsignin.php','_self') </script>";
   }
}
}

else {
  echo "<script>window.open('./dRegistration.php','_self') </script>";
}?>
