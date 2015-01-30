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
<body style="margin:0;">
<div class="main_div">
<div class="content">
	<center><h3> VSQ 2015</h3></center>
	<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan, orci consequat faucibus varius, nulla ex elementum enim, vel fringilla ligula sapien ut sapien. Nunc non mauris elementum, volutpat turpis at, molestie lorem. Maecenas libero felis, pellentesque volutpat nisi ut, euismod tempus metus. Curabitur eu enim ac metus tempor convallis a sed eros. Mauris blandit, nibh vitae porttitor suscipit, tellus orci semper quam, et pellentesque dui diam ut metus. Nunc molestie, risus ac maximus condimentum, est odio ultrices velit, sed suscipit urna leo sit amet eros. Maecenas vel sem hendrerit, dignissim arcu a, aliquam ligula. Nullam molestie pharetra tincidunt. Nulla aliquet ac enim ac venenatis. Pellentesque in  </p>
</div>
<div style="border-left:solid 2px;border-color:white;height:100%;position:inherit;float:left;margin-top:8%;"></div>
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
		<center><p style="font-size:12px;">NOTE: Once you login, you need to finish the quiz in 20 minutes.</p>
		<p style="font-size:30px;  margin-top:20px"><a href="3.php" style="color:rgb(11, 148, 247); text-decoration:none;"><b>Sign Up</b></a></p></center>
	</div>
	
	</form>
</div>
<div class="content1" style="display:inline-block; margin:0; background-color:rgba(50, 0, 71, 0.65); border-top:solid 5px white; padding-bottom:20px;"><p><center>
<img class="lol" src="img/IEEE.png" style="width:18%;">
<img class="lol" src="img/BVPIEEE.png" style="width:18%;">
<img class="lol" src="img/bvp.png" style="width:18%;">
<img class="lol" src="img/HKN.png" style="width:12%; height:17%;">
<img class="lol" src="img/labdaetalogo.png" style="width:7%; height:20%">
</center></p></div>
</div>

</html>