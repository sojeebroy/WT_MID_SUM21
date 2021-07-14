<?php
	$name="";
	$err_name="";
	$password="";
	$err_password="";
	$gender="";
	$err_gender="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$array=array("Jaunary","February","March","April","May","June", "July" ,"August","September","Octobar","November","December");
	$date="";
	$month="";
	$year="";
	$err_dating="";
	$err_month="";
	$err_year="";
	$hasError=false;

	if(isset($_POST["submit"]))
	{	
		if(empty($_POST["name"]))
		{
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 3)
		{
			$hasError = true;
			$err_name="Name must contain more than 3 character";
		}
		else
		{
			$name = $_POST["name"];
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
		if(empty($_POST["phone"]))
		{
			$hasError = true;
			$err_phone="Phone Required";
		}
		else if(!is_numeric($_POST["phone"])){
			$hasError = true;
			$err_phone="Phone Required";
		}	
		else {
			$phone=$_POST["phone"];
		}
		if(empty($_POST["address"]))
		{
			$hasError = true;
			$err_address="Address Required";
		}
		else {
			$address=$_POST["address"];
		}
		
		 if (empty($_POST["email"])) {
			$hasError=true;
			$err_email = "Email is required";   }
			
			else{
                $email =$_POST["email"];
				}
		if (!isset($_POST["date"])){
			$hasError = true;
			$err_dating="Date Required";
		}
		else{
			$date = $_POST["date"];
		}
        if (!isset($_POST["month"])){
			$hasError = true;
			$err_month="month Required";
        }
        else{
			$month = $_POST["month"];
			}
        if (!isset($_POST["year"])){
			$hasError = true;
			$err_year="year Required";
        }
        else{
			$year = $_POST["year"];
        }
        if(!isset($_POST["gender"]))
        {
        	$hasError=true;
        	$err_gender="Gender Required";
        }
        else
        { $gender=$_POST["gender"];}
		
		if(!$hasError)
		{
			echo "<h1>Account created successfilly !!</h1>";
			echo "<b>Profile details :</b><br>";
			echo "Name  		:".$_POST["name"]."<br>";
			echo "Password		:".$_POST["password"]."<br>";
			echo "Email  		:".$_POST["email"]."<br>";
            echo "Phone  		:".$_POST["phone"]."<br>";
			echo "Gender  		:".$_POST["gender"]."<br>";
			echo "Birth date  	:".$_POST["date"]." ".$_POST["month"]." ".$_POST["year"]."<br>";
            echo "Address 	 	:".$_POST["address"]."<br>";	
		}	
	}
?>
<!DOCTYPE html>
<head>
	<title>Account creation for Admin</title>
</head>
<body>
	<form action="" method="post">

		<h1>Hospital Management System</h1><br>
		<h2 align="center"> Create an Admin account.</h2>
		<table align="center">
		<tr>
			<td>Full Name :</td>
			<td><input type="text" name="name" value="<?php echo $name;?>" ></td>
			<td><span> <?php echo $err_name;?> </span></td>				
		</tr>
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
			<td>Phone Number :</td>
			<td><input type="text" name="phone" value="<?php echo $phone;?>"> </td>
		</tr>
		<tr>
			<td>Gender :</td>
			<td colspan="2">
			<input type="radio" name="gender" value="Male"<?php if ($gender=="Male") echo "checked";?>>Male
			<input type="radio" name="gender" value="Female"<?php if ($gender=="female") echo "checked";?>> Female</td>
			<td><span> <?php echo $err_gender;?> </span></td>
		</tr>
		<tr>
			<td>Address :</td>
			<td><input type="text" name="address" value="<?php echo $address;?>"> </td>
		</tr>
		<tr>
			<td>Birth Date :</td>
			<td><select name="date"><option disabled selected>Date</option>  
	         <?php
                foreach(range(1,31) as $i)
                { if($i==$date)
                	{echo "<option selected>$i</option>";}
            	else
                { echo "<option> $i </option>";}
                }?>
             </select>

             <select name="month"> <option disabled selected>Month</option>

              <?php 
  				foreach($array as $p)
				{
					if($p==$month)
					{echo "<option selected>$p</option>";}
					else
					echo "<option> $p </option>";
  				}?>
			 
             </select>
             <select name="year">
              <option disabled selected>Year</option>
              <?php
               foreach(range(1940,2021) as $j)
               {	if($j==$year)
               		{echo "<option selected>$j</option>";}
               		else {echo "<option> $j </option>";}
               }?>

			</select>				
			</td>
			<td><span> <?php echo $err_dating;?></span>
            <span><?php echo $err_month;?></span>
            <span><?php echo $err_year;?> </span></td>
			</tr>
		<tr><td><br></td><td><br></td></tr>
   		<tr>
			<td align="right"><button><a href="Admin.php">Back</a></button></td>
			<td align="left"><input type="submit" name="submit" value="submit"></td>
			<td></td>
		</tr>

		</table>
	</form>
</body>
</html>

