<?php

if (
$_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST['submit'])){$conn=mysqli_connect('localhost','root','','aprisonmanagementsystem') or die ("connection Failed:" .mysqli_connect_error());
if(isset($_POST['id']) && isset($_POST['pass']) && isset($_POST['type']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['sallary']) )  {

  $id= $_POST['id'];
  $newpass= $_POST['pass'];
  $t= $_POST['type'];
  $fn= $_POST['fname'];
  $ln= $_POST['lname'];
  $cf= $_POST['sallary'];
   $sql = "INSERT INTO `account` (`id`, `pass`, `type`) VALUES ('$id', '$newpass', 'admin');";
   $query=mysqli_query($conn,$sql);
   if ($query) {
      echo "New account added";
   }else {
     echo "invalid input";
   }
   $sql = "INSERT INTO `admin` (`aid`, `fname`, `lname`, `salary`) VALUES ('$id', '$fn', '$ln', '$cf');";
    $query=mysqli_query($conn,$sql);
   if ($query) {
      echo "New Admin Added";
   }else {
     echo "invalid input";
   }


}

}











?>
