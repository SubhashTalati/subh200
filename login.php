<?php
mysql_connect("localhost","root","");
mysql_select_db("admi");

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
		
		$sql = "select * from loginbb WHERE post_email='$post_email' AND post_pass='$post_pass'";
		
	
		$result  =mysql_query($sql);

	if(mysql_num_rows($result)>0)
	{
		
			echo "Login Success";
			
	}
	else
	{
		echo "Login Fail";
	}
	
}

mysql_close();

	
}
?>