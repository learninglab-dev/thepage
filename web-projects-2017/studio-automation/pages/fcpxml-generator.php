

<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "ll_media";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
	<head>
		<title>FCPXML Generator</title>
    <link rel='stylesheet' href='../_css/reset.css' type='text/css'>
    <link rel='stylesheet' href='../_css/fcpxml-generator-style.css' type='text/css'>
	</head>
	<body>
    <h2>FCPXML generator</h2>
<div id="completeForm">
  <form action="fcpxml-generator.php" method="post">
      <!--  Project Name: <input class="longString" type="text" name="projectName" style="width: 100px;" value=""> -->
        <h4>Multiclip ID: </h4></br>
        <div class="center">
        <select name="multiclipId">
            <?php
                $query_4 = "SELECT dateShot, counter, projectId, subId FROM shoots";
                $result_4 = mysqli_query($connection,$query_4);
                  if (!$result_4)
                    {
                  die("Database query failed.");
                    }
                  while($row = mysqli_fetch_assoc($result_4))
                    {
                    $date = date_create($row['dateShot']);
                    $formattedDate = date_format($date, 'Ymd');
                    echo '<option value="'.$formattedDate.'_'.$row['counter']
                          .'_'.$row['projectId']
                          .'_'.$row['subId']
                          .'">'
                          .$formattedDate
                          .'_'.$row['counter']
                          .'_'.$row['projectId']
                          .'_'.$row['subId'].'</option>';
                    }
            ?>
          <option value="other">None of the above</option>
        </select>
        </div>
    </br></br>in:
      <input type="text" name="inHour" pattern="[0-2]{1}[0-9]{1}" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
      <input type="text" name="inMinute" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
      <input type="text" name="inSecond" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
      <input type="text" name="inFrame" min="0" max="23" maxlength="2" style="width: 25px;">
    &nbsp; &nbsp; &nbsp; out:
      <input type="text" name="outHour" min="0" max="23" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
      <input type="text" name="outMinute" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
      <input type="text" name="outSecond" min="0" max="59" maxlength="2" style="width: 25px;"><span class="form-001">:</span>
      <input type="text" name="outFrame" min="0" max="23" maxlength="2" style="width: 25px; margin-right:0px;">
      &nbsp; &nbsp; &nbsp; &nbsp;</br></br></br>
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
      function queryDatabase($entryToSend,$connection_f)
        {
          // define variables for all fields
          // ultimately want to change MC id to something generated elsewhere?
          $inputMulticlipId = $entryToSend["multiclipId"];
          $inputInHour = $entryToSend["inHour"];
          $inputInMinute = $entryToSend["inMinute"];
          $inputInSecond = $entryToSend["inSecond"];
          $inputInFrame = $entryToSend["inFrame"];
          $inputOutHour = $entryToSend["outHour"];
          $inputOutMinute = $entryToSend["outMinute"];
          $inputOutSecond = $entryToSend["outSecond"];
          $inputOutFrame = $entryToSend["outFrame"];
          $query_2 = "INSERT INTO shotsForXML (multiclipId,
                    inHour, inMinute, inSecond, inFrame,
                    outHour, outMinute, outSecond, outFrame)
                    VALUES (";
          $query_2 .= "'{$inputMulticlipId}',
                          $inputInHour,
                          $inputInMinute,
                          $inputInSecond,
                          $inputInFrame,
                          $inputOutHour,
                          $inputOutMinute,
                          $inputOutSecond,
                          $inputOutFrame);";
            $result_2 = mysqli_query($connection_f,$query_2);
            if (!$result_2)
              {
            die("Database query failed.");
              }
        }
 if (isset($_POST['submit_inOut'])) {
       queryDatabase($_POST,$connection);
 }
    else {
    //  echo "not sent to MySQL yet.";
    }
?>
</br></br>
<?php
       if (isset($_POST['submit_inOut'])) {
           echo 'OK . . . if you want to get that clip ('. $_POST['multiclipId'].') here is the XML:</br></br>';
           echo '<div class="results">';
           echo htmlspecialchars('<mc-clip name="');
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
          // echo "input values";
         }
 ?>
</div>
<?php
// remember to add mysqli_real_escape_string when real values added.
$query_3 = "SELECT * FROM shotsForXML";
  $result_3 = mysqli_query($connection,$query_3);
  if (!$result_3) {
    die("Database query failed.");
  }
 ?>
 <pre>
   <?php
   /*
     while($row = mysqli_fetch_assoc($result_3))  {
       echo "</br></br>";
       echo "angle is ".$row['angle'];
       echo "</br>in timecode is ".$row['inHour'].":".$row['inMinute'].":".$row['inSecond'].":".$row['inFrame'];
       echo "</br>out timecode is ".$row['outHour'].":".$row['outMinute'].":".$row['outSecond'].":".$row['outFrame'];
       echo "</br></br>";
     }
*/
    ?>
 </pre>

<div class="decorative1">
  1
</div>
<div class="decorative2">
  2
</div>
</body>
</html>
<?php
  mysqli_free_result($result_3);
  mysqli_free_result($result_4);
  mysqli_close($connection);
 ?>
