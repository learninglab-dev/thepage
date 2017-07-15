<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
    <title>PHP in progress</title>
    <link rel="stylesheet" type="text/css" href="_css/reset.css">
    <link rel="stylesheet" type="text/css" href="_css/mk-style.css">
	</head>
	<body>
<?php
      print_r($_GET);
      $resultArray = ($_GET);
?>
</br>
<p>now grabbing bits of the array . . . </p>

    <?php
      echo "today is ". $resultArray["day"]."!";
      echo "Project Name is ". $resultArray["projectName"]."!";
    ?>

  </body>
</html>
