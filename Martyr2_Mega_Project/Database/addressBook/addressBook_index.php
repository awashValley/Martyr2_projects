<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>awashValley | - address book -</title>
		<?php
			require 'addressBook_showContact.php';
		?>
	</head>
	<body>
		<h3>My Contacts </h3></br>

		<form action="addressBook_addContact.php" method="post">
			<div class="go_add_contact">
				<input type="submit" id="go_add_contact" name="add_contact" value="ADD CONTACT">
			</div>
		</form>

	</body>
</html>
