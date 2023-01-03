<?php

if (
$_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST['submit']))
{$conn=mysqli_connect('localhost','root','','aprisonmanagementsystem')
   or die ("connection Failed:" .mysqli_connect_error());
if(isset($_POST['id']) && isset($_POST['pass']) )  {

  $id= $_POST['id'];
    $pass= $_POST['pass'];

   $sql = "SELECT amalnama.pid, sum(activity.actpoint)
   FROM amalnama, activity,account WHERE amalnama.pid= '$id' && amalnama.actcode=activity.actcode && account.id='$id' && account.pass='$pass' ;";
   $result=$conn->query($sql);
   if($result->num_rows>0){
     while ($row= $result-> fetch_assoc()) {
       echo "<tr> The Current Balance of ID <td>" . $row["pid"]."</td> is ( <td>".$row["sum(activity.actpoint)"]."</td> )</tr>" ;
     }
   };


   }else {
     echo "invalid input";
   }



}













?>
<html lang="en" dir="ltr">
<body>
<br>
<h1>This is your current Balance</h1><br>
<a href="prisoner.html">Return to Prisoners Dashboard</a> <br>
<a href="changepass.html">change your pass</a> <br>
<a href="Home.html">logout</a> <br>

</body>
</html>
