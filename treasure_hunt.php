<html>
<head>
<link rel="stylesheet" href="css/body.css" type="text/css">
</head>
<?php
   session_start();
   $link = mysql_connect('sandbox.ieee.org', 'delhibvce', 'hdb32wb98');
   mysql_select_db(delhibvce);
   if (!$link) {
       die('Could not connect: ' . mysql_error());
   }
   $ses =  $_SESSION['uname'];
       if(!isset ($ses))
       {
        
        header('Location: 1.php');
        echo "LOGIN FIRST";
       }
  
   function quesput()
   {   $ses =  $_SESSION['uname'];
 
   
   $sql_query= "SELECT * FROM user WHERE uname ="."'". $ses."'";
   $res = mysql_query($sql_query) or die ($sql_query.mysql_error());
   $pwRow1 = mysql_fetch_array($res);
  
   $sql_query= "SELECT * FROM fervour_2014_thunt WHERE LEVEL ="."'". $lev."'";
   $res = mysql_query($sql_query) or die ($sql_query.mysql_error());
       global $res;
       $pwRow = mysql_fetch_array($res);
       
    	$eid = $pwRow['question'];
       echo $eid."<br>";
   }
   /*
   {
       $lel = $pwRow['level'] +1;
       echo $lel;
       */
        $ses =  $_SESSION['uname'];
   $sql_query= "SELECT * FROM user WHERE uname ="."'". $ses."'";
   $res = mysql_query($sql_query) or die ($sql_query.mysql_error());
   $pwRow1 = mysql_fetch_array($res);
   $lev = $pwRow1['level_2'];
   $sql_query= "SELECT * FROM fervour_2014_thunt WHERE LEVEL ="."'". $lev."'";
        $res = mysql_query($sql_query) or die ($sql_query.mysql_error());
        $pwRow = mysql_fetch_array($res);
       $eid = $pwRow['ANSWER'];
      
       
       similar_text($eid, $_POST["Answer"],$result2);
   
       if($result2>70)
       {
            $lev +=1; 
            $sql_query= "UPDATE user SET level_2 = "."'". $lev."'" ."WHERE  uname ="."'". $ses."'";
  
           $res = mysql_query($sql_query) or die ($sql_query.mysql_error());
           
                
            header("Location : treasure_hunt.php");
           
       }
   
   
   
   ?>
   <div id="login">
      Hey, <?php echo $_SESSION['uname']; ?>. You are logged in.
 
      <!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
      <a href="logout.php">Logout</a>    <br /><br /><br /><br />
      <div id="ques">
         <p> <?php $ses =  $_SESSION['uname'];
 
   
   $sql_query= "SELECT * FROM user WHERE uname ="."'". $ses."'";
   $res = mysql_query($sql_query) or die ($sql_query.mysql_error());
   $pwRow1 = mysql_fetch_array($res);
   $lev = $pwRow1['level_2'];
   $sql_query= "SELECT * FROM fervour_2014_thunt WHERE LEVEL ="."'". $lev."'";
   $res = mysql_query($sql_query) or die ($sql_query.mysql_error());
     $pwRow = mysql_fetch_array($res);
       
    	$eid = $pwRow['QUESTION'];
       echo $eid."<br>"; ?></p>
      </div>
      <div id="submit">
         <form action="treasure_hunt.php" method="post">
            <br><br>
            Type in your answer<input type="text" name="Answer" value=""><br><br>
            <input type="submit" value="Submit">
         </form>
         <p>Click the "Submit" button to give the answer.".</p>
      </div>
   </div>
</html>