<?php
mysql_connect("localhost","root","");
mysql_select_db("admi");

if(isset($_POST['submit']))
{

	$post_email=$_POST['email'];
	
	$post_pass=$_POST['password'];
	

	if($post_email=='' or $post_pass=='')
	{
		echo "Enter Something  new ";
		exit();
	}
	else
	{
		
		
		$sql="insert into loginbb(post_email,post_pass,role) Value('$post_email','$post_pass','u')";
echo $sql;

		$sql1="insert into logind(post_email,post_pass) Value('$post_email','$post_pass')";
echo $sql1;
		if(mysql_query($sql))
		{
			echo "Record Saved...";
		
			
		if(mysql_query($sql1))
		{
			echo "Record Saved Success fylly...";
			
		}
		
		
}
}
}
?>