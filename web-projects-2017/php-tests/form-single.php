

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Form</title>
    <link rel='stylesheet' href='_css/reset.css' type='text/css'>
    <link rel='stylesheet' href='_css/mk-style.css' type='text/css'>
	</head>
	<body>
    <h2>php-driven Form</h2>
<div id="completeForm">
    <form action="form-single.php" method="post">
      Username: <input type="text" name="username" value="username" /></br>
      Password: <input type="password" name="password" value="password"></br>
      </br>
      <input type="submit" name="submit_userPass" value="Submit" />
    </form>
    </br>

    <form action="form-single.php" method="post">
      <div class="clipId">clip 1</div>   &nbsp; &nbsp; &nbsp;
        in:
          <input type="text" name="inHour" pattern="[0-2]{1}[0-9]{1}" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="inMinute" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="inSecond" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="inFrame" min="0" max="23" maxlength="2" style="width: 25px;">
        &nbsp; &nbsp; out:
          <input type="text" name="outHour" min="0" max="23" maxlength="2" style="width: 25px;">:
          <input type="text" name="outMinute" min="0" max="59" maxlength="2" style="width: 25px;">:
          <input type="text" name="outSecond" min="0" max="59" maxlength="2" style="width: 25px;">:
          <input type="text" name="outFrame" min="0" max="23" maxlength="2" style="width: 25px;">
          &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="submit" name="submit_inOut" value="submit" class="submitButton" />
    </form>


</div>

  <pre>


  <?php /*

        print_r($_POST);

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
  */
?>

    </pre>

    <?php
      if (isset($_POST['submit_userPass'])) {
            // form was submitted

        $username = $_POST["username"];
        $password = $_POST["password"];
        $message = "logging in ".$username.".";

    /*    print_r($_POST);
            foreach ($_POST as $individualElement)
              {
                echo $individualElement . "</br>";
              }
        function calcFrames($clipToCheck)
            {
            $inFrames = (((($clipToCheck["inHour"]*60)
                            + $clipToCheck["inMinute"]) * 60)
                            + $clipToCheck["inSecond"])
                            + $clipToCheck["inFrame"];
        echo "frames of the in point = " . $inFrames;
            }
            calcFrames($_POST);

          */

          } else {
        $message = "please log in";

            }
        echo $message;
      if (isset($_POST['submit_inOut'])) {
        print_r($_POST);
                foreach ($_POST as $individualElement)
                  {
                    echo $individualElement . "</br>";
                  }
            function calcFrames($clipToCheck)
                {
                $inFrames = (((($clipToCheck["inHour"]*60)
                                + $clipToCheck["inMinute"]) * 60)
                                + $clipToCheck["inSecond"])
                                + $clipToCheck["inFrame"];
            echo "frames of the in point = " . $inFrames;
                }
                calcFrames($_POST);

      } else {
        echo "submit ins and outs";
      }
     ?>

	</body>
</html>
