<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>awashValley | - add My contact -</title>
  </head>
  <body>
    <h3>Address Book | Keep your contacts in POCKET...</h3></br>

    <!-- Get contact details from user. -->
    <form action="addressBook_addContact.php" method="post">
      <div class="field">
        <label for="name">CONTACT</label></br>
        <input type="text" id="name" name="name" placeholder="Name" autofocus="true">
      </div>
    </br>
      <div class="field">
        <label for="phone">PHONE</label></br>
        <input type="phone" id="phone" name="phone" placeholder="(+123) 45 678 9012">
        <input type="text" list="phone_types" placeholder="Mobile">
        <datalist id="phone_types">
          <option value="Mobile"</option>
          <option value="Home"</option>
          <option value="Work"</option>
          <option value="Other"</option>
        </datalist>
      </div>
    </br>
      <div class="field">
        <label for="email">EMAIL</label></br>
        <input type="email" id="email" name="email" placeholder="Email">
        <input type="text" list="email_types" placeholder="Private">
        <datalist id="email_types">
          <option value="Private"</option>
          <option value="Work"</option>
          <option value="Other"</option>
        </datalist>
      </div>
    </br>
      <div class="field">
        <label for="address">ADDRESS</label></br>
        <textarea cols="30" rows="5" id="address" name="address">
        </textarea>
      </div>
    </br>
      <div class="modify">
        <input type="button" id="add_field" value="ADD New Field">
      </div>
    </br>
      <div class="process">
        <input type="submit" id="add_contact" name="addContact" value="ADD CONTACT">
      </div>
    </form>

    <form action="addressBook_index.php" method="post">
      <!-- <button onclick="history.go(-1);">Back </button><br /> WORKS TOO..-->
      <input type="submit" id="back" name="back" value="back">
    </form>


    <!-- Add contact to the localhost database. -->
    <?php
        error_reporting(0);
        require 'db/addressBook_connect.php';

        // Get values from form.
        $name        = trim($_POST['name']);
        $phone       = trim($_POST['phone']);
        $email       = trim($_POST['email']);
        $address     = trim($_POST['address']);
        $addContact  = trim($_POST['addContact']);

        // add contact to localhost database
        if(isset($addContact)){
            if (!empty($name) && !empty($phone) && !empty($email) && !empty($address)) {
              $qr_insrt = "INSERT INTO contacts (contact_id, Name, Phone, Email, Address, Created)
                              VALUES(NULL, '$name', '$phone', '$email', '$address', CURRENT_TIMESTAMP)";

              mysql_query($qr_insrt, $con) or die($qr_insrt."<br/><br/>".mysql_error());
            }
            else {
              echo "Sorry, no contact to add. Please provide me your contact. Thanks! ";
            }
        }

        mysql_close($con);
    ?>

  </body>
</html>
