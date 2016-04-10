<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome customer!</title>
</head>
<body>

	<h3>Welcome customer!</h3>

	<div id="guestContacts">

		<form action="guest_index.php" method="POST">
			
				<label for="txtName">Name:</label>
				<input type="text" name="guestName"><br>

				<label for="txtPhone">Phone:</label>
				<input type="text" name="guestPhone"><br>

				<label for="txtEmail">Email:</label>
				<input type="text" name="guestEmail"><br>

				<label for="txtDate">Date:</label>
				<input type="date" name="guestDate" placeholder="yyyy-mm-dd" value="<?php echo date('Y-m-d'); ?>"><br>				

				<input type="submit" name="submitGuest" value="Submit">


		</form>
	</div>
	
</body>
</html>