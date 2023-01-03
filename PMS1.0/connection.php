<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "aprisonmanagementsystem";

$con = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if (!$con) {
  die("Connect failed".mysqli_connect_error());
}
else { echo "";
}
$base_url = "http://localhost/aprisonmanagementsystem/php";
 ?>
