<?php

if (
$_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST['submit'])){$conn=mysqli_connect('localhost','root','','aprisonmanagementsystem') or die ("connection Failed:" .mysqli_connect_error());
if(isset($_POST['id']) && isset($_POST['pass']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['convictedfor'])  && isset($_POST['convictedforcode']) )  {

  $id= $_POST['id'];
  $newpass= $_POST['pass'];

  $fn= $_POST['fname'];
  $ln= $_POST['lname'];
  $cf= $_POST['convictedfor'];
  $cfc= $_POST['convictedforcode'];
   $sql = "INSERT INTO `account` (`id`, `pass`, `type`) VALUES ('$id', '$newpass', 'prisoner');";
   $query=mysqli_query($conn,$sql);
   if ($query) {
      echo "New ";
   }else {
     echo "invalid input";
   }
   $sql = "INSERT INTO `prisoner` (`pid`, `fname`, `lname`, `convictedfor`) VALUES ('$id', '$fn', '$ln', '$cf');";
    $query=mysqli_query($conn,$sql);
   if ($query) {
      echo "Prisoner ";
   }else {
     echo "invalid input";
   }
   $sql = "INSERT INTO `amalnama` (`pid`, `actcode`) VALUES ('$id','$cfc');";
    $query=mysqli_query($conn,$sql);
   if ($query) {
      echo "Adding Done";
   }else {
     echo "invalid input";
   }


}

}



?>

<html lang="en" dir="ltr">
<body>
<br>
<a href="addprisoner.html">Add One More Prisoner</a> <br>
<a href="addadmin.html">Add admin</a> <br>
<a href="changepass.html">change your pass</a> <br>
<a href="Home.html">logout</a> <br>

</body>
</html>
