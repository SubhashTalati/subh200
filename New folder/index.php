<html>
<head>
<title>www.spectra.com</title>
</head>
<body>
<form method="POST" action="index.php" enctype="multipart/form-data" >
<table align="center" width="600" border="5" >
<tr>
<td bgcolor="yellow" align="center" colspan="6">
<h2>Insert Record</h2></td>
</tr>

<tr>
<td align="right">Email ID</td>
<td><input type="text" name="email"></td>
</tr>

<tr>
<td align="right">Password</td>
<td><input type="text" name="password"></td>
</tr>


<tr>
<td align="center" colspan="6"><input type="submit" name="submit" value="Add record"></td>
</tr>
</table>
</form>
</body>
</html>


<?php
include("includes/connect.php");

if(isset($_POST['submit']))
{

	$post_email=$_POST['email'];
	
	$post_pass=$_POST['password'];
	

	if($post_email=='' or $post_pass=='')
	{
		echo "Enter Something";
		exit();
	}
	else
	{
		
		
		$sql="insert into login1(post_email,post_pass) Value('$post_email','$post_pass')";
	
		if(mysql_query($sql))
		{
			echo "Record Saved...";
		}
	}
}
?>