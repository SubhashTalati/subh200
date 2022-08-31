<?php
mysql_connect("localhost","root","");
mysql_select_db("subhash");
error_reporting(0);
$uid = $_GET['rn'];
$query ="delete from login1 where User_Id='$uid' ";
$data =mysql_query($query);
	if($data)
		{
		echo "<font color='green'> Record Deleted,<a href='manage.php'>  Check Update List Here</a>";
		}
		else
		{
		echo "<font color='red'>Record not Deleted <a href='manage.php'>  Check Update List Here</a>";
		}

		
	

?>

