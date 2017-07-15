

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>FCPXML Generator</title>
    <link rel='stylesheet' href='../_css/reset.css' type='text/css'>
    <link rel='stylesheet' href='../_css/mk-style.css' type='text/css'>
	</head>
	<body>
    <h2>FCPXML generator</h2>
<div id="completeForm">
    <form action="fcpxml-generator.php" method="post">
      Project Name: <input class="longString" type="text" name="projectName" style="width: 100px;" value="">
      Multiclip ID: <input class="longString" type="text" name="multiclipId" style="width: 300px;" value="">
    </br>
    </br>
    <div class="clipId">clip 1</div>   &nbsp; &nbsp; &nbsp;
        in:
          <input type="text" name="inHour" pattern="[0-2]{1}[0-9]{1}" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="inMinute" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="inSecond" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="inFrame" min="0" max="23" maxlength="2" style="width: 25px;">
        &nbsp; &nbsp; out:
          <input type="text" name="outHour" min="0" max="23" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="outMinute" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="outSecond" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="outFrame" min="0" max="23" maxlength="2" style="width: 25px;">
          &nbsp; &nbsp; &nbsp; &nbsp;
      <input type="submit" name="submit_inOut" value="submit" class="submitButton" />
    </form>

    <?php
      function calcStartFrame($clipToCheck)
        {
            $inFrame = ((((($clipToCheck["inHour"]*60)
                        + $clipToCheck["inMinute"]) * 60)
                        + $clipToCheck["inSecond"]) * 24)
                        + $clipToCheck["inFrame"];
            $inFrameXml = $inFrame * 1001;
            return $inFrameXml;
        }
      if (isset($_POST['submit_inOut'])) {
        echo "here is some fcpxml for the clip you just requested:";
        echo calcStartFrame($_POST);

      } else {
        echo "submit ins and outs";
      }
     ?>

</div>


	</body>
</html>
