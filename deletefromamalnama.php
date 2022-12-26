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
