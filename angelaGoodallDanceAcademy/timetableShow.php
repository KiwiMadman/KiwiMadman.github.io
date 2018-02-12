<?php require_once('includes/dbconn.php');
	$timetable_sql="SELECT * FROM timetables,days WHERE `timetables`.`day`=`days`.`day` AND `days`.`day` =".$_GET['action'];
	$timetable_query=mysql_query($timetable_sql) or die(mysql_error());
	$rsTimetable = mysql_fetch_assoc($timetable_query);?>
<!DOCTYPE html>
<head>
<title>Angela Goodall's Dance Academy</title>
<link rel="stylesheet" type="text/css" href="css/layout.css">
</head>
<body>
<header>

	<h1><a href="index.html" class="header"><img src="images/header2.jpg" /></a> </h1>
</header>

<nav>
	<p class="nav">
		<a href="index.html">Home</a> | 
		<a href="photos.html">Photos</a> | 
		<a href="contact.html">Contact Us</a> | 
		<a href="about.html">About</a>	| 
		<a href="timetable.php">Timetables</a>
	</p>
</nav>
<section>	
<h2>Timetables</h2>
<?php echo $rsTimetable['DayName'];?>
<table>
<?php
while($rsTimetable = mysql_fetch_array($timetable_query)){   //Creates a loop to loop through results
echo 	"<tr>
			<td>" . $rsTimetable['times'] . "</td>
			<td>" . $rsTimetable['type'] . "</td>
			<td>".$rsTimetable['level']. "</td>
		</tr>";}  //$row['index'] the index here is a field name
?>

</table>
	
</section>

<footer>
	<p>Contact Us: <strong>04 111 1111</strong> or email us at 
		<strong><a href="mailto:AngelaGoodallDanceAcademy@gmail.com" class="contact">AngelaGoodallDanceAcademy@gmail.com</a></strong>
	</p>
</footer>
</body>
</html>