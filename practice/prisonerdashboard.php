

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>



</head>
<body>

  <div class="background">

  <div class="pro"> <h1 style="text-align: center; font-family: Arial;"> PROFILE</h1>
    <h2 style="text-align: center; font-family: cursive;font-weight: normal;"></h2>
      <hr>
 </div>
    <table style="width:100%; text-align: center">
        <tr>
            <td>

    </table>
    <hr>
    <table class="content-table">
        <tr>




  <center> <h2>Details</h2></center>
    <tr>

      <?php
      session_start();
      if(!isset($_SESSION['id'])){
  header('Location ./signin.php');

      }

      ?>

<?php echo $_SESSION['id'] ?>


            <th>Name</th>
            <th style="width: 15.3%; vertical-align: top;">
            <th>First Name</th>
            <th style="width: 15.3%; vertical-align: top;">
  <th>Last Name</th>
  <th style="width: 15.3%; vertical-align: top;">
        <th>COnvicted For</th>
        <th style="width: 15.3%; vertical-align: top;">

            </th>
        </tr>
        <?php
        $pemail=$_SESSION['id'];
        include('connection.php');
        $view_movie="select * from prisoner where pid= '$pemail'";
        $run=mysqli_query($con,$view_movie);
        while($row=mysqli_fetch_array($run)) {
            $fid = $row[0];
            $fName = $row[1];
            $lname = $row[2];
            $con = $row[3];

            ?>
            <tbody>

            <tr>
              <td><?php echo $fName  ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo $lname ?></td>
              <th style="width: 15.3%; vertical-align: top;">
              <td><?php echo  $con ?></td>
              <th style="width: 15.3%; vertical-align: top;">

              <?php
            }
           ?>
    </table>
    <hr>
    <p>



      </div>
</center>
</body>

</html>
