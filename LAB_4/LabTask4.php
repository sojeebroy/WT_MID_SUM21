<?php
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$ConfirmPassword="";
	$err_ConfirmPassword="";
	$gender="";
	$err_gender="";
	$where="";
	$err_where="";
	$exist=[];
	$err_exist="";
	$bio="";
	$err_bio="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
    $city="";
	$code="";
    $err_city="";
    $state="";
    $err_state="";
    $PZcode="";
    $err_PZcode="";
	$array=array("Jaunary","February","March","April","May","June", "July" ,"August","September","Octobar","November","December");
	$date="";
	$Month="";
	$year="";
	$err_dating="";
	$err_Month="";
	$err_year="";
	
	
	$hasError=false;

	
	function Checkbox($exist){
		global $exist;
		foreach($exist as $h){
			if($h == $exist) return true;
		}
		return false;
	}
	
	if(isset($_POST["submit"]))
	{	
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 3){
			$hasError = true;
			$err_name="Name must contain more than 3 character";
		}
		else{
		htmlspecialchars($name = $_POST["name"]);
		}
		
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="username Required";
		}
		else if(strlen($_POST["username"]) <=6){
			$hasError = true;
			$err_username="Username must contain more than 6 character and no space allowed";
		}
		 else if(strpos($_POST["username"]," ")){
        $hasError=true;
        $err_username="Username should not contain space";
		}
		else{
			$name = $_POST["username"];
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
		else if(!strpos($_POST["password"],"#"))
		{
			$hasError=true;
			$err_password="Password should contain special character";
		}
		else if(!strpos($_POST["password"],"1"))
		{
			$hasError=true;
			$err_password="Password should contain Numeric values";
		}
		else if(!ctype_upper($_POST["password"]))
		{
			$hasError=true;
		    $err_password="Password should contain UpperCase values";
	    }
		else if(!ctype_lower($_POST["password"]))
		{
			$hasError=true;
		    $err_password="Password should contain LowerCase values";
		}
		else if(strpos($_POST["password"]," "))
		{
			$hasError=true;
		    $err_password="Password should not contain white space";
	    }
		else{
			 $password=$_POST["password"];
			}
		if(empty($_POST["ConfirmPassword"]))
		{
		$hasError = true;
		$err_ConfirmPassword="Cofirm Password Required";
		}
		else if($_POST["password"]!=$_POST["ConfirmPassword"])
		{
			$hasError = true;
			$err_ConfirmPassword="Password doesn't match";
		}	
		else{
			$ConfirmPassword=$_POST["ConfirmPassword"];
		}
		if(empty($_POST["code"]))
		{
			$hasError = true;
			$err_code="code Required";
		}
		else if(!is_numeric($_POST["code"]))
		{
			$hasError = true;
			$err_code="Invalid Code";
		}
		else {
			$code=$_POST["code"];
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
		if(empty($_POST["city"]))
		{
			$hasError = true;
			$err_city="City Required";
		}
		else {
			$city=$_POST["city"];
		}
		if(empty($_POST["state"]))
		{
		$hasError = true;
		$err_state="state Required";
		}
		else {
		$state=$_POST["state"];
		}
		if(empty($_POST["PZcode"]))
		{
		$hasError = true;
		$err_PZcode="state Required";
		}
		else {

		$PZcode=$_POST["PZcode"];
		}

		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["exist"])){
			$hasError = true;
			$err_exist="Required";
		}
		else{
			$exist = $_POST["exist"];
		}
		if (!isset($_POST["where"])){
			$hasError = true;
			$err_where="Required";
		}
		else{
			$where = $_POST["where"];
		}
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
		 if (empty($_POST["email"])) {
			$hasError=true;
			$err_email = "Email is required";   }
			elseif(strpos($_POST["email"],"@.")){
				$hasError=true;
			    $err_email="Email must contain @ and .";
		    }
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
        if (!isset($_POST["Month"])){
			$hasError = true;
			$err_Month="Month Required";
        }
        else{
			$Month = $_POST["Month"];
			}
        if (!isset($_POST["year"])){
			$hasError = true;
			$err_year="year Required";
        }
        else{
			$year = $_POST["year"];
        }
		
		if(!$hasError){
			echo "<h1>Form submitted</h1>";
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["ConfirmPassword"]."<br>";
			echo $_POST["email"]."<br>";
            echo $_POST["code"]."<br>";
            echo $_POST["phone"]."<br>";
            echo $_POST["address"]."<br>";
            echo $_POST["city"]."<br>";
            echo $_POST["state"]."<br>";
            echo $_POST["PZcode"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["date"]."<br>";
            echo $_POST["Month"]."<br>";
            echo $_POST["year"]."<br>";
			echo $_POST["gender"]."<br>";
			echo $_POST["bio"]."<br>";
			$arr = $_POST["exist"];

			foreach($arr as $e){
				echo "$e<br>";
			}
		}	
	}
?>
<html>
	<head></head>
	<body align="center">
		<form action="" method="post">
			<fieldset>
			 <legend> <h1>Club Member Registration </h1></legend>
				<table align="center">
				<tr>
					<td>Name :</td>
					<td><input type="text" name="name" value="<?php echo $name; ?>"> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Username :</td>
					<td><input type="text" name="username">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="password" value="<?php echo $password;?>">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
				<tr>
					<td>Confirm Password :</td>
					<td><input type="password" name="ConfirmPassword" value="<?php echo $ConfirmPassword;?>">  </td>
					<td><span> <?php echo $err_ConfirmPassword;?> </span></td>
				</tr>
				<tr>
					<td>Email :</td>
					<td><input type="text" name="email" value="<?php echo $email; ?>"> </td>
					<td><span> <?php echo $err_email;?> </span></td>
				</tr>
				<tr>
					<td>Phone :</td>
					<td><input type="text" placeholder="code" size="3"><b> -  </b><input type="text" name="phone" placeholder="Number" size="9" value="<?php echo $phone;?>"> </td>
					<td><span> <?php echo $err_phone;?> </span></td>
				</tr>
				<tr>
                   <td>Address :</td>
                   <td><input type="text" name="address"value="<?php echo $address;?>" placeholder="Street Address"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="text" name="city" placeholder="City" size="7"><b> -  </b><input type="text" name="state" placeholder="State" size="5" value="<?php echo $state;?>"> </td>
					<td><span> <?php echo $err_address;?> </span></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" placeholder="Postal/Zip code"></td>
					<td><span> <?php echo $err_address;?> </span></td>
				</tr>
				<tr>
					<td>Birth Date :</td>
					<td><select name="date"><option disabled selected>Date</option>
                   <?php
                for($i=1; $i<=31; $i++)
                {

                echo "<option> $i </option>";
                  }
                ?>
             </select>

             <select name="Month"> 

              <?php 
  				foreach($array as $p)
				{
					echo "<option selected> $p </option>";
  				}
  				?>
			 <option disabled selected>Month</option>
             </select>
             <select name="year">
              <option disabled selected>Year</option>
              <?php
               for($j=1950; $j<=2020; $j++)
           {
             echo "<option> $j </option>";
              }
              ?>

			</select>
					</td>
					<td><span> <?php echo $err_dating;?></span>
            <span><?php echo $err_Month;?></span>
              <span><?php echo $err_year;?> </span></td>
				</tr>
				
				<tr>
					<td>Where did you hear<br>about us?  :</td>
					<td><input type="checkbox" name="exist[]" <?php if(Checkbox("A friend or colleague")) echo "checked";?> value="A friend or colleague"> A friend or colleague<br>
					<input type="checkbox" name="exist[]" <?php if(Checkbox("Google")) echo "checked";?> value="Google"> Google<br>
					<input type="checkbox" name="exist[]" <?php if(Checkbox("Blog Post")) echo "checked";?> value="Blog Post"> Blog Post<br>
					<input type="checkbox" name="exist[]" <?php if(Checkbox("News Article")) echo "checked";?> value="News Article"> News Article

					</td>
					<td><span> <?php echo $err_exist;?> </span></td>
				</tr>
				
				<tr>
					<td>Gender :</td>
					<td><input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				<tr>
					<td>Bio</td>
					<td>: <textarea name="bio" ><?php echo $bio; ?></textarea>
					<td><span> <?php echo $err_bio;?> </span></td>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
				
				</table>
			</fieldset>
		
		</form>
	</body>
</html>