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
	<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan, orci consequat faucibus varius, nulla ex elementum enim, vel fringilla ligula sapien ut sapien. Nunc non mauris elementum, volutpat turpis at, molestie lorem. Maecenas libero felis, pellentesque volutpat nisi ut, euismod tempus metus. Curabitur eu enim ac metus tempor convallis a sed eros. Mauris blandit, nibh vitae porttitor suscipit, tellus orci semper quam, et pellentesque dui diam ut metus. Nunc molestie, risus ac maximus condimentum, est odio ultrices velit, sed suscipit urna leo sit amet eros. Maecenas vel sem hendrerit, dignissim arcu a, aliquam ligula. Nullam molestie pharetra tincidunt. Nulla aliquet ac enim ac venenatis. Pellentesque in  </p>
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