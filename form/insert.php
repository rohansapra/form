<html>
<body>
<?php

	$con = mysql_connect("localhost","root","");
	
	if(!$con)
	{
		echo 'Not connected';
	}
	if(!mysql_select_db($con,"tutorial"))
	{
		echo 'Database not selected';
	}
	$Name=$_POST['username'];
	$Email=$_POST['email'];
	$sql="INSERT INTO person (Name,Email) VALUES ('$Name','$Email')";
	if(!mysql_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo'Inserted';
	}
	header("refresh:2; url=1.html");
	
	mysql_close($con)
?>
</body>
</html>