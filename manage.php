<?php
require_once "dbconfig1.php";

error_reporting(0);

$sql = "select * from user1_reg";
$result  =mysqli_query($con,$sql);
$total =mysqli_num_rows($result);

if($total !=0)
		{
		
		?>
		<table width=80% align="center"
>
			<tr>
			<td>User Id</td>
			<td>First Name</td>
		
			</tr>
		
		
		<?php
		while($result1 =mysqli_fetch_assoc($result))
			{
			echo "<tr>
			<td>".$result1['User_Id']."</td>
			<td>".$result1['User_FName']."</td>
			
			<td><a href='update.php?rn=$result1[User_Id]>Edit</a></td>
			


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