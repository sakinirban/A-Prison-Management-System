<?php

if (
$_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST['submit'])){$conn=mysqli_connect('localhost','root','','aprisonmanagementsystem') or die ("connection Failed:" .mysqli_connect_error());
if(isset($_POST['id']) && isset($_POST['pass'])  && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['sallary']) )  {

  $id= $_POST['id'];
  $newpass= $_POST['pass'];

  $fn= $_POST['fname'];
  $ln= $_POST['lname'];
  $cf= $_POST['sallary'];
   $sql = "INSERT INTO `account` (`id`, `pass`, `type`) VALUES ('$id', '$newpass', 'admin');";
   $query=mysqli_query($conn,$sql);
   if ($query) {
      echo "New ";
   }else {
     echo "invalid input";
   }
   $sql = "INSERT INTO `admin` (`aid`, `fname`, `lname`, `salary`) VALUES ('$id', '$fn', '$ln', '$cf');";
    $query=mysqli_query($conn,$sql);
   if ($query) {
      echo "Admin Added";
   }else {
     echo "invalid input";
   }


}

}


?>
<html lang="en" dir="ltr">
<body>
<br>
<a href="admin.html">Add One More Admin</a> <br>
<a href="addprisoner.html">Add Prisoner</a> <br>
<a href="changepass.html">Change Your Pass</a> <br>
<a href="Home.html">logout</a> <br>

</body>
</html>
