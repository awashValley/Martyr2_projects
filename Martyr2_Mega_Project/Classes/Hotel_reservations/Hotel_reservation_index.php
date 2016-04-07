<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		Hotel Reservation System
	</title>
</head>
<body>
<!-- *******************************************************************************
  Copyright awashValley
********************************************************************************
  Program    : Hotel_reservation_index.php
  Author     : awashValley
  Location   : 
  Date       : 06APR2016
  Version    : 1.0
  Description: 
  Remarks    : 
********************************************************************************
  Input      :      
  Output     :                   
********************************************************************************
  Modification history:
********************************************************************************
    Name * Ver * Date       * Description     
    **************************************************************************** 
    HW1  * 1.0 * 02APR2016  * Version 1.0.
******************************************************************************* -->

	
	<div id="main">
		
		<form action="guest/guest_index.php" method="post">
			
			<label for="btnGuest">Guest:</label>
		    <input type= "Submit" id="btnGuest" name="guest" value="Guest"><br>
		</form>

		<form action="staff/staff_index.php" method="post">
			
			<label for="btnStaff">Staff:</label>
			<input type="submit" id="btnStaff" name="staff" value="Staff">
		</form>
	</div>


	<!--<?php  
		// $guest = trim($_POST['guest']);
		// $staff = trim($_POST['staff']);

		// if(isset($guest)){
		// 	require "guest/guest_index.php";
		// }elseif ($staff) {
		// 	require "staff/staff_index.php";
		// }
	?>
	-->
</body>
</html>
