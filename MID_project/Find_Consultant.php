<?php
	$department="";
	$err_department="";
	$dept=array("Out Patient Consultation","Cardiology","Investigation","CT scan","MRI","Ultra Sound","Nuclear Medicine","X-ray","Lab Medicine","Vaccination","Health Screening","Pharmacy","Others");
$name="";
$err_name="";
	
	$hasError=false;

	if(isset($_POST["search"]))
	{
		if(empty($_POST["department"]))
		{
			$hasError = true;
			$err_department="department Required";
		}
		else {
			$department=$_POST["department"];
		}

		if(!$hasError)
		{
			echo "<h1>Search Result</h1><br>";
			echo "Dr. Shams Munwar"."<br>";
			echo "MBBS, MRCP (UK), D.Card (London)"."<br>";
			echo $_POST["department"]."<br><br><br>";
		    echo "Prof. Dr. A.Q.M. Reza"."<br>";
			echo "MBBS, MRCP (UK), D.Card (London).<br>";
			echo $_POST["department"]."<br><br><br>";
			echo "Prof. (Dr.) Md. Shahabuddin Talukder"."<br>";
			echo "MBBS, D.Card. (DU), FCPS (Medicine)"."<br>";
			echo $_POST["department"];
		}

	}	
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["name"]))
		{
			$hasError = true;
			$err_department="Name Required";
		}
		else {
			$department=$_POST["name"];
		}

		if(!$hasError)
		{
			echo "<h1>Search Result</h1><br>";
			echo $_POST["name"]."<br>";
			echo "Cardiologist"."<br>";
			echo "MBBS, MRCP (UK), D.Card (London)"."<br>";
			
		}

	}	
?>
<html>
<head>
	<title>Find Consultant</title>
</head>
<body>
<form action="" method="post">
		<h1>Hospital Management System</h1><br>
		<h2 align="center">Find a consultant.</h2>
		<h3 align="center">By Department.</h3>

		<table align="center">
			<tr>
				<td>Select Department :</td>
			<td>
				<select name="department"><option disabled selected>---Select---</option>
              <?php 
  				foreach($dept as $d)
				{
					if($d==$department)
					{echo "<option selected>$d</option>";}
					else
					echo "<option> $d </option>";
  				}?>
             </select>
			</td>
			<td><span><?php echo $err_department;?></span></td>
			</tr>
			<tr>
			<td align="center" colspan="2"><button value="search"
				name="search">Search</button></td>	
			</tr>
		</table><br>



		<h3 align="center">By Name.</h3>
		<table align="center">
			<tr>
			<td>Full Name :</td>
			<td><input type="text" name="name" value="<?php echo $name;?>" ></td>
			<td><span> <?php echo $err_name;?> </span></td>	
			</tr>
			<tr>
			<td align="center" colspan="2"><input type="submit" name="submit" value="submit"></td>	
			<tr>
				<td align="center" colspan="2"><button><a href="HomePage.php">Back to home</a></button></td>
			</tr>
		</table>
	</form>
</body>
</html>


