<?php

if (
$_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST['submit'])){$conn=mysqli_connect('localhost','root','','aprisonmanagementsystem') or die ("connection Failed:" .mysqli_connect_error());
if(isset($_POST['id']) && isset($_POST['pass'])&& isset($_POST['oldpass']) )  {

  $id= $_POST['id'];
  $newpass= $_POST['pass'];
  $oldpass= $_POST['oldpass'];
   $sql = "UPDATE account SET pass ='$newpass' WHERE  pass= '$oldpass' && id= '$id';";
   $query=mysqli_query($conn,$sql);
   if ($query) {
      echo "hola";
   }else {
     echo "invalid input";
   }


}

}











?>
<html lang="en" dir="ltr">
<body>
  <br>
<a href="Home.html">logout</a> <br>

</body>
</html>
