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
		<table width=80% align="center"
>
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
			<td><a href='update.php?rn=$result1[User_Id]&sn=$result1[post_email]&c1=$result1[post_pass]'>Edit</a></td>
			<td><a href='delete.php?rn=$result1[User_Id]' onclick= ' checkdelete()'>Delete</a></td>


			</tr>";			
			}
		}
		else
		{
		echo "No Record Found";
		}
			

?>
</table>
<script>
function checkdelete()
	{
	confirm('Are u Sure?');
	}
</script>