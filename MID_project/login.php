<?php
	$password="";
	$err_password="";
	$email="";
	$err_email="";

?><!DOCTYPE html>
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