<!DOCTYPE html>
<head>
<title>Angela Goodall's Dance Academy</title>
<link rel="shortcut icon"
     href="images/icon.ico" />
<link rel="stylesheet" type="text/css" href="css/layout.css">
</head>
<body>
<header>
		<a href="index.html" class="header"><img src="images/header3.jpg" /></a>
</header>

<nav>
	<p class="nav">
		<a href="index.php">Home</a> | 
		<a href="photos.php">Photos</a> | 
		<a href="contact.php">Contact Us</a> | 
		<a href="about.php">About</a> | 
		<a href="timetable.php?action=0">Timetables</a>
	</p>
</nav>
<section class="timetablePage">	
<h2>Timetables</h2>
	<h3>Which day would you like to see the timetable for?</h3>
	<p>Classes are set to start from the Monday 2nd February and are just vague times at the moment </p>
	<div id="containerLeft"><ul>
		<li><a href="timetable.php?action=1" class="<?php if ($_GET['action']==1){echo"current";}?>"/> Monday</a></li>
		<li><a href="timetable.php?action=2"class="<?php if ($_GET['action']==2){echo"current";}?>"/>Tuesday</a></li>
		<li><a href="timetable.php?action=3"class="<?php if ($_GET['action']==3){echo"current";}?>"/>Wednesday</a></li>
		<li><a href="timetable.php?action=4"class="<?php if ($_GET['action']==4){echo"current";}?>"/>Thursday</a></li>
		<li><a href="timetable.php?action=5"class="<?php if ($_GET['action']==5){echo"current";}?>"/>Friday</a></li>
		<li><a href="timetable.php?action=6"class="<?php if ($_GET['action']==6){echo"current";}?>"/>Saturday</a></li>
		<li><a href="timetable.php?action=7"class="<?php if ($_GET['action']==7){echo"current";}?>"/>Sunday</a></li>
	</ul>
</div>
<div id="containerRight">
<table>
<?php
if ($_GET['action']==0){
echo "<p class='noTable'>Please select a day.</p>";
}else if($_GET['action']==1){
echo "	<tr><td>5:30pm</td><td>American Jazz</td><td>Elementary</td></tr>
		<tr><td>6:15pm</td><td>American Jazz</td><td>Grade 5</td></tr>
		<tr><td>7:00pm</td><td>Orignal Jazz</td><td>Advanced</td></tr>
		<tr><td>7:45pm</td><td>American Jazz</td><td>Adult Elementary</td></tr>
		<tr><td>8:30pm</td><td>=</td><td>=</td></tr>";
}else if($_GET['action']==2){
echo "	<tr><td>3:30pm</td><td>'Lets Dance'</td><td>Pre School</td></tr>
		<tr><td>4:00pm</td><td> Jazz</td><td>Pre Grade 2 (Beginners)</td></tr>
		<tr><td>4:30pm</td><td>Tap</td><td>Beginners</td></tr>
		<tr><td>5:00pm</td><td>=</td><td>=</td></tr>";
}else if($_GET['action']==3){
echo "	<tr><td>4:00pm</td><td>=</td><td>=</td></tr>
		<tr><td>4:45pm</td><td>=</td><td>=</td></tr>
		<tr><td>5:30pm</td><td>Contemporary</td><td>Introductory</td></tr>
		<tr><td>6:15pm</td><td>Contemporary</td><td>Preparatory</td></tr>";
}else if($_GET['action']==4){
echo "<tr><td>3:45pm</td><td>Tap</td><td>Beginner</td></tr>";

}else if($_GET['action']==5){
echo "	<tr><td>4:00pm</td><td>=</td><td>=</td></tr>";
}else if($_GET['action']==6){
echo "	<tr><td>9:30am</td><td>'Lets Dance'</td><td>Pre School</td></tr>
		<tr><td>10:00am</td><td>Jazz</td><td>Pre Grade 2 (Beginners)</td></tr>
		<tr><td>10:30am</td><td>Ballet</td><td>Pre Grade 2 (Beginners)</td></tr>
		<tr><td>11:00am</td><td>American Jazz</td><td>Elementary</td></tr>";
}else if($_GET['action']==7){
echo "<p class='noTable'> No classes have been rostered for this day.</p>";
}
?>

</table>
<a href="Javascript:history.back()"class="back" >Back</a>
</div>
</section>
<br>

<footer>
	<p>Contact Us: <strong>021 174 3500</strong> or email us at 
		<strong><a href="mailto:angelagoodalldance@xtra.co.nz" class="contact">angelagoodalldance@xtra.co.nz </a></strong>
	</p>
</footer>
</body>
</html>