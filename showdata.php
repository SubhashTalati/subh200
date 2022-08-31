<?php
mysql_connect("localhost","root","");
mysql_select_db("subhash");

error_reporting(0);

$sql = "select * from login1";
$result  =mysql_query($sql);
$total =mysql_num_rows($result);

if($total !=0)
		{

		while($result1 =mysql_fetch_assoc($result))
			{
		echo $result1[User_Id]. " " .$result1['post_email']. " " .$result1['post_pass']."<br/>";			}
		}
		else
		{
		echo "No Record Found";
		}

?>
