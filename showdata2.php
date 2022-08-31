<?php
mysql_connect("localhost","root","");
mysql_select_db("subhash");

error_reporting(0);

$sql = "select * from login1";
$result  =mysql_query($sql);
$total =mysql_num_rows($result);

if($total !=0)
		{
		
		?>
		<table width=80% align="center" border="2">
			<tr>
			<td>User Id</td>
			<td>Email</td>
			<td>Pass</td>
			</tr>
		
		
		<?php
		while($result1 =mysql_fetch_assoc($result))
			{
			echo "<tr>
			<td>".$result1['User_Id']."</td>
			<td>".$result1['post_email']."</td>
			<td>".$result1['post_pass']."</td>
			</tr>";			}
		}
		else
		{
		echo "No Record Found";
		}
			

?>
</table>