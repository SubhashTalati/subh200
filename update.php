<?php
mysql_connect("localhost","root","");
mysql_select_db("subhash");
error_reporting(0);

echo $_GET['rn'];
echo $_GET['sn'];
echo $_GET['c1'];



?>

<html>
<head>
</head>
<body>
<form action="" method="GET">
User Id<input type="text" name="userid" value="<?php echo $_GET['rn']; ?>"/><br><br>
Email<input type="text" name="studentname" value="<?php echo $_GET['sn']; ?>"/><br><br>
Pass<input type="text" name="class"value="<?php echo $_GET['c1']; ?>"/><br><br>
<input type="submit" name="submit" value="update"/>
</form>
<?php
if($_GET['submit'])
		
		{

		$uid =$_GET['userid'];	
		$email =$_GET['studentname'];
		$pass =$_GET['class'];	
		$query ="UPDATE login1 set post_email='$email',post_pass='$pass' where User_Id='$uid' ";
$data =mysql_query($query);
	if($data)
		{
		echo "<font color='green'> Record Update,<a href='manage.php'>  Check Update List Here</a>";
		}
		else
		{
		echo "<font color='red'>Record not Updated <a href='manage.php'>  Check Update List Here</a>";
		}

		}
		else
		{
		echo "<font color='blue'>Click on Update Button to Save Changes";
		}
	

	
?>
</body>
</html>

