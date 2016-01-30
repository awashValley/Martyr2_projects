<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      error_reporting(0);	// hides system error message
      require 'db/addressBook_connect.php';

      // Define and run the query
      $qr = "SELECT *
               FROM contacts";
      $result = mysql_query($qr, $con) or die($qr."<br/><br/>".mysql_error());

      $fields_num = mysql_num_fields($result);
      echo "<table border='1'><tr>";
      // printing table headers
      for($i=0; $i<$fields_num; $i++)
      {
        $field = mysql_fetch_field($result);
        echo "<td>{$field->name}</td>";
      }
      echo "</tr>\n";
      // printing table rows
      while($row = mysql_fetch_row($result))
      {
        echo "<tr>";

        // $row is array... foreach( .. ) puts every element
        // of $row to $cell variable
        foreach($row as $cell)
          echo "<td>$cell</td>";
          echo "</tr>\n";
        }

        mysql_free_result($result);

    ?>
  </body>
</html>
