<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
	<form action="Admin.php" method="post">
		<h1>Hospital Management System</h1><br>
		<h1 align="center"> Welcome </h1>	
	<p align="right"><?php
		echo $_POST["email"];
	?></p>
	<h3 align="right"><button><a href="login.php">log out</a></button></h3>
	<table align="center">
		<tr>
			<td><button style="height:100px;width:150px"><a href="Doctor_account_creating_form.php">Create a Doctor Account</a> </button></td>
			<td><button style="height:100px;width:150px"><a href="Admin_accoount_creating_form.php">Register a new Admin</button></td>
		</tr>
	</table>		
</form>
</body>
</html>