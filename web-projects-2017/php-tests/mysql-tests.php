<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "lessing1766";
  $dbname = "shots";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>

<?php

// remember to add mysqli_real_escape_string when real values added.

  $tempId = '20161216_002_LL_SOC113_Manja_MC';
  $tempInHour = 12;
  $tempInMinute = 51;
  $tempInSecond = 8;
  $tempInFrame = 7;
  $tempOutHour = 12;
  $tempOutMinute = 52;
  $tempOutSecond = 8;
  $tempOutFrame = 7;
  $tempAngle = 'B';


  $firstQuery = "SELECT * FROM shotsForXML";
  $firstResults = mysqli_query($connection,$firstQuery);
  if (!$firstResults) {
    die("Database query failed.");
  }

  $query_2 = "INSERT INTO shotsForXML (multiclipId,
            inHour, inMinute, inSecond, inFrame,
            outHour, outMinute, outSecond, outFrame, angle)
            VALUES (";
  $query_2 .= "'{$tempId}', $tempInHour, $tempInMinute, $tempInSecond,
              $tempInFrame, $tempOutHour, $tempOutMinute, $tempOutSecond,
              $tempOutFrame, '{$tempAngle}');";

  echo $query_2;

  $result_2 = mysqli_query($connection,$query_2);
  if (!$result_2) {
    die("Database query failed.");

  }



$query_3 = "SELECT * FROM shotsForXML";
  $result_3 = mysqli_query($connection,$query_3);
  if (!$result_3) {
    die("Database query failed.");
  }

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>MySQL Tests</title>



	</head>
	<body>
  <pre>
    <?php
      while($row = mysqli_fetch_assoc($firstResults))  {
        echo "</br></br>";
        echo "angle is ".$row['angle'];
        echo "</br>in timecode is ".$row['inHour'].":".$row['inMinute'].":".$row['inSecond'].":".$row['inFrame'];
        echo "</br>out timecode is ".$row['outHour'].":".$row['outMinute'].":".$row['outSecond'].":".$row['outFrame'];
        echo "</br></br>";
      }
     ?>
</pre>

<pre>
  <?php
    while($row = mysqli_fetch_assoc($result_3))  {
      echo "</br></br>";
      echo "angle is ".$row['angle'];
      echo "</br>in timecode is ".$row['inHour'].":".$row['inMinute'].":".$row['inSecond'].":".$row['inFrame'];
      echo "</br>out timecode is ".$row['outHour'].":".$row['outMinute'].":".$row['outSecond'].":".$row['outFrame'];
      echo "</br></br>";
    }
   ?>
</pre>


	</body>
</html>

<?php
  mysqli_free_result($firstResults);
  mysqli_close($connection);
 ?>
