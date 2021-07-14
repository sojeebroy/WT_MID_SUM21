<?php
	$username="";
	$err_username-"";
	$password="";
	$err_password="";
	$users=array("sojeeb"=>"1234","apurbo"=>"2345","dhrubo"=>"3456");
	$hasError=false;
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST["username"]))
		{
			$hasError=true;
			$err_username="Username Required";
		}
		else {
			$username=$_POST["username"];
		}

		if(empty($_POST["password"]))
		{
			$hasError=true;
			$err_password="Password Required";
		}
		else {
			$password=$_POST["password"];
		}
		if(!hasError)
		{
			foreach($username as $u=>$p)
			{
				if($username==$u && $password==$p)
				{
					setcookie("logged",$username,time()+300,"/");
					header("Location: Welcome.php");
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>