<?php

if (
$_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST['submit'])){$conn=mysqli_connect('localhost','root','','aprisonmanagementsystem') or die ("connection Failed:" .mysqli_connect_error());
if(isset($_POST['id']) && isset($_POST['pass']) )  {

  $id= $_POST['id'];
  $pass= $_POST['pass'];




  $sql2 = "SELECT * FROM admin,account WHERE aid='".$id."'AND pass ='".$pass."'limit 1";
  $result2= mysqli_query($conn,$sql2);

  if (mysqli_num_rows($result2)==1) {
    header("Location:http://localhost/practice%20unstable3.0/admin.html ");
 exit();
  }else {
    echo "ID or Password is incorrect";
  }
   $sql1 = "SELECT * FROM prisoner,account WHERE pid='".$id."'AND pass ='".$pass."'limit 1";
   $result1= mysqli_query($conn,$sql1);

   if (mysqli_num_rows($result1)==1) {
     header("Location:http://localhost/practice%20unstable3.0/prisoner.html ");
exit();
   }else {
     echo "Password is incorrect";
   }


   $sql3 = "SELECT * FROM jailer,account WHERE jid='".$id."'AND pass ='".$pass."'limit 1";
   $result3= mysqli_query($conn,$sql3);

   if (mysqli_num_rows($result3)==1) {
     header("Location:http://localhost/practice%20unstable3.0/jailer.html ");
exit();
   }else {
     echo "Password is incorrect";
   }










   }


}













?>
