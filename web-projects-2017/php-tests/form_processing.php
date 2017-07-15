<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>form processing</title>
	</head>
	<body>
    <pre>
      <?php
        print_r($_POST);
      ?>



    <?php
      foreach ($_POST as $individualElement)
      {
        echo $individualElement . "</br>"
      ;
      }

     ?>
  <?php
    function calcFrames($clipToCheck) {
      $inFrames = (((($clipToCheck["inHour"]*60) + $clipToCheck["inMinute"]) * 60) + $clipToCheck["inSecond"]) + $clipToCheck["inFrame"]
      ;
      echo "frames of the in point = " . $inFrames;
    }
    calcFrames($_POST);
  ?>

      </pre>

	</body>
</html>
