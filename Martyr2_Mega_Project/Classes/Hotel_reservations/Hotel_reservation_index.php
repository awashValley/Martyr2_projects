<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		Airline / Hotel Reservation System
	</title>
</head>
<body>
	<h3>Martyr2 project: CLASS </h3>
	<h3>Challenge: Airline / Hotel Reservation System</h3>
	<h3>Developer: awashValley</h3>
	<h3>Date: 06APR2016</h3>
	<h3>History:</h3>
	<p>-------- Version: 1.0 [02Apr2016]------------- </p>
	<p>==============================================</p>

	
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