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
    <form action="form_processing.php" method="post">
      Username: <input type="text" name="username" value="username" /></br>
      Password: <input type="password" name="password" value="password"></br>
      </br>
      <input type="submit" name="submit" value="Submit" />
    </form>
  </br>

    <form action="form_processing.php" method="post">
    <span class="clipId">clip 1</span>   &nbsp; &nbsp;
    in:
      <input type="number" name="inHour" min="0" max="23" maxlength="2" style="width: 20px;"><span class="form-001">:</span>
      <input type="number" name="inMinute" min="0" max="59" maxlength="2" style="width: 20px;"><span class="form-001">:</span>
      <input type="number" name="inSecond" min="0" max="59" maxlength="2" style="width: 20px;"><span class="form-001">:</span>
      <input type="number" name="inFrame" min="0" max="23" maxlength="2" style="width: 20px;">
      &nbsp; &nbsp; out:
      <input type="text" name="outHour" min="0" max="23" maxlength="2" style="width: 20px;">:
      <input type="text" name="outMinute" min="0" max="59" maxlength="2" style="width: 20px;">:
      <input type="text" name="outSecond" min="0" max="59" maxlength="2" style="width: 20px;">:
      <input type="text" name="outFrame" min="0" max="23" maxlength="2" style="width: 20px;">
      </br>
    </br>
    </br>
    </br>
    done?
      <input type="submit" name="submit" value="submit" class="submitButton" />
    </form>
  </form>

	</body>
</html>
