<?php

if (
$_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST['submit'])){$conn=mysqli_connect('localhost','root','','aprisonmanagementsystem') or die ("connection Failed:" .mysqli_connect_error());
if(isset($_POST['id']) && isset($_POST['pass']) )  {

  $id= $_POST['id'];
  $newpass= $_POST['pass'];
   $sql = "UPDATE account SET pass ='$newpass' WHERE id= '$id' ";
   $query=mysqli_query($conn,$sql);


}

}







 //$result= mysqli_query($con,$sql) or die();



?>
