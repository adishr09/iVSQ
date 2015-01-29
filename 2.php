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
$i=1;
mysql_connect('mysql1.freehosting.com', 'bvpieeec_lol', 'hdb32wb98') or die("<br/>error");
mysql_select_db('bvpieeec_delhibvce') or die("<br>DB_error");
$sql = "SELECT * FROM `vsq_15`";
$sql_run = mysql_query($sql) or die(mysql_error());
if (mysql_num_rows($sql_run) > 0) {
    // output data of each row
	echo "<table border=\"1\" style=\"width:auto\">";
	echo "<tr><td><b>S.No.</b></td><td><b>First Name</b></td><td><b>Last Name</b></td><td><b>College</b></td><td><b>User Name</b></td><td><b>Password</b></td><td><b>Email</b></td></tr>";
    while($row = mysql_fetch_assoc($sql_run)) {
        echo "<tr><td>" . $i. ".</td><td>" . $row["fname"]. "</td><td>" . $row["lname"]. "</td><td>" . $row["clg"]. "</td><td>" . $row["uname"]. "</td><td>" . $row["pass"]. "</td><td>". $row["email"]. "</td></tr><br>";
		$i=$i+1;
    }
	echo "</table>";
} else {
    echo "0 results";
}

?>
</html>