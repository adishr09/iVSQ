<html>
<head>
<link rel="stylesheet" href="css/body.css" type="text/css">
</head>
<?php
	session_start();
	if(isset($_POST['user']) && isset($_POST['pass']))
	{
		mysql_connect('mysql1.freehosting.com', 'bvpieeec_lol', 'hdb32wb98') or die("<br/>error");
		mysql_select_db('bvpieeec_delhibvce') or die("<br>DB_error");
		$u=$_POST['user'];
		$p=$_POST['pass'];
		echo $u;
		echo $p."<br><br>";

		$q="SELECT * FROM `vsq_15` WHERE pass='".$p."'";
		
		$q_run=mysql_query($q) or die("<br/>error_run");
		$q_row=mysql_fetch_assoc($q_run);
		echo '<br>'.$q_row['uname']; 
		$uname=$q_row['uname'];
		if($uname==$u ){$_SESSION['uname']=$u; 
		header( 'Location: index_new.php' ) ;
		}
		else if ($end != 0 ){header( 'Location: end.php' ) ;}
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
	<p>LOGIN</p>
	</div>
	<form action="1.php" method="POST" style="margin:0;">
	<div class="box">
	Username:<br/> <input type="text" name="user" class="text_box" />
		<br/><br/>
	Password:<br/> <input type="password" name="pass" class="text_box"/>
			<br/><br/>
	</div>
	<div class="tail">
		<input type="submit" value="Login" class="but_ton"/>
		<center><p style="font-size:12px;">NOTE:Once you login you need to finish the quiz in 20 mins.</p>
		<p style="font-size:20px;"><a href="3.php">Sign Up First!</a></p></center>
	</div>
	</form>
</div>

</div>
</html>