<?php

if (
$_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST['submit'])){$conn=mysqli_connect('localhost','root','','aprisonmanagementsystem') or die ("connection Failed:" .mysqli_connect_error());
if(isset($_POST['id']) && isset($_POST['actcode']) )  {

  $id= $_POST['id'];
  $actcode= $_POST['actcode'];
   $sql = "INSERT INTO `amalnama` (`andiary`, `actcode`, `pid`) VALUES (NULL, '$actcode', '$id');";
   $query=mysqli_query($conn,$sql);
   if ($query) {
      echo "New Activity added";
   }else {
     echo "invalid input";
   }


}

}


?>
