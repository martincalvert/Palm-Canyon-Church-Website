<?php
include'dbdb.php';

$con=mysqli_connect('db517047786.db.1and1.com',$dbU,$dbP,$dbN);

$result=mysqli_query($con,"select * from groups order by day;");
echo"<table class=\"table table-striped table-bordered table-hover\">
        <thead>
        <tr>
        <td>Day</td>
        <td>Leader</td>
        <td>Location</td>
        <td>Phone</td>
        <td>Time & Weeks</td>
        </tr>
        </thead>
        <tbody>";
while($row = mysqli_fetch_array($result)){
        
        $id=$row['groupid'];
        $name=$row['name'];
		$address=$row['address'];
		$city=$row['city'];
		$phone=$row['phone'];
		$time=$row['time'];
		$day=$row['dayName'];
        echo "<tr>        
        <td>$day</td>
        <td><a href=\"#$id\" role=\"button\" data-toggle=\"modal\">$name</a></td>
        <td>$address<br> $city</td>
        <td>$phone</td>
        <td>$time</td>
        </tr>";
    }
	echo"</tbody> </table>";
?>