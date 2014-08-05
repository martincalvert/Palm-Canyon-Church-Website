<?php
include_once 'db_connect.php';
if ($mysqli->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	if(!($stmt=$mysqli->prepare("select datename,name from events where date>curdate() order by date asc"))){
		echo"failed prep".$stmt->error;
	}
	
	if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    }
$stmt->bind_result($date,$name);
while($stmt->fetch()){
	echo"<li>$date - $name</li>";
}

$stmt->close();
$mysqli->close();
?>