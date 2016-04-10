 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		Airline / Hotel Reservation System
	</title>

	<link rel="stylesheet" type="text/css" href="design.css">

	<div class="box">
		<div class="box-shadow"></div>
		<div class="box-gradient">
		
		<?php 
			include("header.php");

			$myheader =new MakeHeader("Class", "Hotel Reservation", "awashValley", "06APR2016", "10APR2016");

			print "{$myheader->showHeader()}";
		?>
		</div>
	</div>
	
</head>
<body>
	

	
	<!-- <div id="main">
		
		<form action="guest/guest_index.php" method="post">
			
			<label for="btnGuest">Guest:</label>
		    <input type= "Submit" id="btnGuest" name="guest" value="Guest"><br>
		</form>

		<form action="staff/staff_index.php" method="post">			
			<label for="btnStaff">Staff:</label>
			<input type="submit" id="btnStaff" name="staff" value="Staff">
		</form>
	</div> -->


	<div>
		<p>Testing!!!</p>

		<!--<?php 
			// require "guest/reservation.php";

			// $order1 = new reservation;

			// $order1->contacts("Abel Henok John", "+31123456789", "abcdef@yahoo.com");
			// $order1->reserve("15-04-2016");

			// print $order1->info() . "<br>";

		?>-->

		<?php  

		    require "db/connection.php";
			
			$connect =new MakeConnection("localhost", "root", "Password");
			print "{$connect->checkConnection()}"; 
			
			$connect->selectDB("Martyr2_class_hotel");
			

		?>

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
