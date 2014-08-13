<!doctype html>
<html>
 <? include 'head.php' ?>
<body>
  <? include 'navbar.php' ?>
   <div class="container marketing space color">
    <div class="col-xs-12 text-center"><h1>Upcoming Events</h1></div>
      <div class="row">
        <div class="col-xs-12">
        <h4>Take a look at our upcoming events,for the next couple of weeks!</h4>
        <p><uL id="events">
	<?
	  include_once 'vault/db_connect.php';
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
            </uL>
        </p>
        </div>
      </div><!-- /.row -->
      <!-- START THE FEATURETTES -->
      <hr class="featurette-divider">
      <? include 'features.php' ?>
      <hr class="featurette-divider">
      <? include 'footer.php' ?>
<script>
 document.title+=" Upcoming Events"
</script>
</body>
</html>
