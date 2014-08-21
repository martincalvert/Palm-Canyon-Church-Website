<?php
  $request = ($_POST["request"]);

  include_once 'db_connect.php';

  if($request=="load"){
    if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }
      if(!($stmt=$mysqli->prepare("select datename,name,date from events where date>=curdate() order by date asc"))){
        echo"failed prep".$stmt->error;
      }

      if (!$stmt->execute()) {
      echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
        }
    $stmt->bind_result($datename,$name,$date);
    $results="";
    $x=0;
    while($stmt->fetch()){
      $results.="<div id='$x'>
                <div class='form-group col-xs-5'>
                        <label for='event-name'>Event Name</label>
                        <input id='event-name' name='event[]' value='$name'>
                    </div>
                    <div class='form-group col-xs-2'>
                        <label for='event-date'>Event Date</label>
                        <input id='event-date' name='event[]' value='$date'>
                    </div>
                    <div class='form-group col-xs-4'>
                        <label for='event-date-name'>Event Date Name</label>
                        <input id='event-date-name' name='event[]'' value='$datename'>
                    </div>
                    <div class='col-xs-1'>
                        <i class='fa fa-trash text-danger' id='delete' value='$x'></i>
                    </div></div>";
                    $x++;
    }

    $stmt->close();
    $mysqli->close();
  }

  if($request=="save"){

  }




?>
