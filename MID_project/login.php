<?php
	$password="";
	$err_password="";
	$email="";
	$err_email="";
	$hasError=false;

	if(isset($_POST["submit"]))
	{	
		if (empty($_POST["email"])) {
			$hasError=true;
			$err_email = "Email is required";   }
			
			else{
                $email =$_POST["email"];
				}
		
		if(empty($_POST["password"]))
        {
			$hasError=true;
			$err_password="Password Required";
        }
        else if(isset($_POST[""]))
		{
		    echo htmlspecialchars($_POST["password"]);
		}
		else if(strlen($_POST["password"])<8){
        $hasError=true;
		$err_password="Password Must Be 8 Charachter";
		}
		else{
			 $password=$_POST["password"];
			}
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action="Admin.php" method="post">
		<h1>Hospital Management System</h1><br>
		<h2 align="center"> Create an Admin account.</h2>
		<table align="center">
		<tr>
			<td>Email :</td>
			<td><input type="text" name="email" value="<?php echo $email; ?>"> </td>
			<td><span> <?php echo $err_email;?> </span></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="password" name="password" value="<?php echo $password;?>"> </td>
			<td><span> <?php echo $err_password;?> </span></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="submit" value="login"></td>	
		</tr>
		<tr>
			<td align="center" colspan="2"><button><a href="HomePage.php">Back to home</a></button></td>
		</tr>
	</table>
	</form>

</body>
</html>