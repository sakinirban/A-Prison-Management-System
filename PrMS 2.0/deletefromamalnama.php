<?php

if (
$_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST['submit'])){$conn=mysqli_connect('localhost','root','','aprisonmanagementsystem') or die ("connection Failed:" .mysqli_connect_error());
if(isset($_POST['id']) )  {

  $id= $_POST['id'];

  $sql = "DELETE FROM `amalnama` WHERE `amalnama`.`andiary` = '$id'; ";
   $query=mysqli_query($conn,$sql);
   if ($query) {
      echo "The Record was deleted";
   }else {
     echo "invalid input";
   }


}

}


?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<br>
    <a href="jailer.html">Go to Jailer Home</a> <br>
    <a href="addprisoner.html">Add Prisoner</a> <br>
    <a href="addadmin.html">Add admin</a> <br>
    <a href="deletefromamalnama.html">Delete a record</a> <br>
    <a href="changepass.html">change your password</a> <br>
    <a href="Home.html">logout</a> <br>
  </body>
</html>
