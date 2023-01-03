<?php

if (
$_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST['submit'])){$conn=mysqli_connect('localhost','root','','aprisonmanagementsystem') or die ("connection Failed:" .mysqli_connect_error());
if(isset($_POST['id']) && isset($_POST['fname']) && isset($_POST['lname']) )  {

  $pid= $_POST['id'];
  $fname= $_POST['fname'];
  $lname= $_POST['lname'];
   $sql = "UPDATE prisoner SET prisonerfname ='$fname' WHERE pid= '$pid'
          ";
   $query=mysqli_query($conn,$sql);

   echo "$id";
   echo "$fname";
   echo "$lname";



}

}


?>
