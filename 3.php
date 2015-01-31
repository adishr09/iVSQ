<html>
<head>
<link rel="stylesheet" href="css/body.css" type="text/css">
</head>
<?php
/*
CREATE TABLE user
(
uid int NOT NULL AUTO_INCREMENT,
pass varchar(25) NOT NULL,
uname varchar(25),
PRIMARY KEY (uid)
)
*/
session_start();

if(isset($_POST['user']) && isset($_POST['pass']))
{
mysql_connect('mysql1.freehosting.com', 'bvpieeec_lol', 'hdb32wb98') or die("<br/>error");
mysql_select_db('bvpieeec_delhibvce') or die("<br>DB_error");
$u=$_POST['user'];
$p=$_POST['pass'];
$fname=$_POST['first'];
$lname=$_POST['last'];
$clg=$_POST['clg'];
$email=$_POST['email'];

$q="INSERT INTO `vsq_15` (fname ,lname,clg,uname,pass,email,done,done_2)VALUES ('$fname','$lname','$clg','$u','$p','$email',0,0)";

$q_run=mysql_query($q) or die(mysql_error());
header( 'Location: 1.php' ) ;
}
?>
<div class="main_div">
<div class="content">
	<center><h3> VSQ 2015</h3></center>
	<p> VSQ is back! 
It is the 8th Edition. :D</p>

<p>The IEEE Student Branch of BVCOE will be conducting the 8th edition of The Dr. Vikram Sarabhai Rotating Shield inter-college quiz in January 2015. </p>

<p>It is a GENERAL QUIZ.</p>

<p>The Quiz is open to all College and School students.
It is an engrossing and stimulating event that lives up to its billing as one of Delhi's top inter-college quizzes.</p>

<p>Potential topics : Current affairs, history, sports, entertainment (Game of Thrones too, yes), pop culture (no One Direction, no worries!). Basically life, the universe and everything that makes it. </p></p>
</div>
<div style="border:groove;border-color:grey;height:75%;position:inherit;float:left;margin-top:5%;"></div>
<div id="login">
	<div class="head">
	<p>REGISTER</p>
	</div>
	<form action="1.php" method="POST" style="margin:0;">
	<div class="box_l">
	First Name:<br/> <input type="text" name="user" class="text_box" />
		<br/><br/>
	Last Name:<br/> <input type="text" name="pass" class="text_box"/>
			<br/><br/>
	College:<br/> <input type="text" name="pass" class="text_box"/>
			<br/><br/>
	</div>
	<div class="box_r">
	Username:<br/> <input type="text" name="user" class="text_box" />
		<br/><br/>
	Email:<br/> <input type="text" name="pass" class="text_box"/>
			<br/><br/>
	Password:<br/> <input type="password" name="pass" class="text_box"/>
			<br/><br/>
	
	</div>
	<div class="tail">
		<input type="submit" value="Register" class="but_ton"/>
		<center><p style="font-size:20px;"><a href="1.php">Login Here!</a></p></center>
	</div>
	</form>
</div>

</div>	
</html>