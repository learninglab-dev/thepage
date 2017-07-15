

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
    <!--  Project Name: <input class="longString" type="text" name="projectName" style="width: 100px;" value=""> -->
      Multiclip ID: <input class="longString" type="text" name="multiclipId" style="width: 315px;" value="">
    </br>
  <!--  <div class="clipId">clip 1</div>   &nbsp; &nbsp; &nbsp; -->
        in:
          <input type="text" name="inHour" pattern="[0-2]{1}[0-9]{1}" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="inMinute" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="inSecond" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="inFrame" min="0" max="23" maxlength="2" style="width: 25px;">
        &nbsp; &nbsp; &nbsp; out:
          <input type="text" name="outHour" min="0" max="23" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="outMinute" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="outSecond" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
          <input type="text" name="outFrame" min="0" max="23" maxlength="2" style="width: 25px;">
          &nbsp; &nbsp; &nbsp; &nbsp;</br>
      <input type="submit" name="submit_inOut" value="submit" class="submitButton" />
    </form>

    <?php
      function calcStartFrame($clipToCheck)
        {
            $inFrameCalculated = ((((($clipToCheck["inHour"]*60)
                        + $clipToCheck["inMinute"]) * 60)
                        + $clipToCheck["inSecond"]) * 24)
                        + $clipToCheck["inFrame"];
            $inFrameXml = $inFrameCalculated * 1001;
            return $inFrameXml;
        }
      function calcDuration($clipToCheck)
        {
              $outFrameCalculated = ((((($clipToCheck["outHour"]*60)
                          + $clipToCheck["outMinute"]) * 60)
                          + $clipToCheck["outSecond"]) * 24)
                          + $clipToCheck["outFrame"];
              $outFrameXml = $outFrameCalculated * 1001;
              $inFrameCalculated = ((((($clipToCheck["inHour"]*60)
                          + $clipToCheck["inMinute"]) * 60)
                          + $clipToCheck["inSecond"]) * 24)
                          + $clipToCheck["inFrame"];
              $inFrameXml = $inFrameCalculated * 1001;
              return $outFrameXml - $inFrameXml + 1;
        }
      if (isset($_POST['submit_inOut'])) {
        echo "</br></br></br></br></br></br>here is some fcpxml for the clip you just requested:</br></br>";
        echo '<div class="results">';
        echo htmlspecialchars("<mc-clip name=");
        echo $_POST['multiclipId'];
        echo htmlspecialchars('" offset="0s" ref="r2" duration="');
//this needs to be updated so that offset and ref are variables
        echo calcDuration($_POST);
        echo htmlspecialchars('/24000s" start="');
        echo calcStartFrame($_POST);
        echo htmlspecialchars('/24000s">');
        echo '</br><div class="indent">';
        echo htmlspecialchars('<mc-source angleID="0P49Yw2lRNChGiVreSorVQ" srcEnable="audio"/>');
        echo "</br>";
        echo htmlspecialchars('<mc-source angleID="0P49Yw2lRNChGiVreSorVQ" srcEnable="video"/>');
        echo "</div>";
        echo htmlspecialchars('</mc-clip>');
        echo "</div>";


      } else {
        echo "submit ins and outs";
      }

     ?>

</div>
<div class="rightSidebar">
  reserved for visualization of results
</div>

	</body>
</html>
