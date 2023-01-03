<?php
include("connection.php");

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $fname =$_POST['fname'];
  $lname =$_POST['lname'];
  $salary = $_POST['salary'];


  if ($id  == '')
  {
    echo "<script>alert ('Please enter id') </script>";
    echo "<script>window.open('./jailer.php','_self') </script>";
    exit();
  }


if($fname  == '')
{
  echo "<script>alert ('Please enter first name') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}

if($lname  == '')
{
  echo "<script>alert ('Please enter last name') </script>";
  echo "<script>window.open('./pRegistration.php','_self') </script>";
  exit();
}




$check_id = "select * from admin where id ='$id'";
$result = mysqli_query($con,$check_id );
if (mysqli_num_rows($result)>0) {
    echo "<script>alert ('PID $id Already Exist....') </script>";
    echo "<script>window.open('./jailer.php','_self') </script>";
    exit();

}
else {

  $insert_account= "insert into admin (aid, fname, lname, salary) values ('$id', '$fname', '$lname' ,'$salary')";
if (mysqli_query($con,$insert_account )) {
 echo "<script>window.open('jailer.php','_self') </script>";
}
}
}
else {
  echo "<script>window.open('./createaccount.php','_self') </script>";
}
?>
