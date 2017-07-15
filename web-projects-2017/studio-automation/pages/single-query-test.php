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
    <h2>single query test</h2>
    <div id="completeForm">
      <form action="single-query-test.php" method="post">
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
                              .'">'
                              .$formattedDate
                              .'_'.$row['counter']
                              .'_'.$row['projectId']
                              .'_'.$row['subId'].'</option>';
                        }
                ?>
              <option value="20161216_003">20161216_003_LL_Movement_JJIVMK</option>
              <option value="20161216_004">20161216_004_LLUF_AC_Alain</option>
              <option value="20161219_001">20161219_001_Holiday_Recipes_VMMO</option>
              <option value="20161219_002">20161219_002_LL_Movement_Wong_IV</option>
              <option value="20161219_003">20161219_003_Timelapse_Talk_MKCK</option>
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


</div>


</body>
</html>

<?php
  mysqli_free_result($result_4);
  mysqli_close($connection);
 ?>
