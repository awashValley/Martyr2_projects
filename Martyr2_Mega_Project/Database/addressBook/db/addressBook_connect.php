<?php
  // make connection
  // $con = mysqli_connect("localhost", "root", "password", "Martyr2_db_addressBook");
  $con = mysql_connect("localhost", "root", "password");

 // define database
 mysql_select_db("Martyr2_db_addressBook", $con);

 if(!($con)){
   die("The connection to database was not successful.");
 }

?>
