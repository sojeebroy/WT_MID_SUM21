<html>
<head>
	<title>Account creation for Doctor</title>
</head>
<body>

		<h1>Hospital Management System</h1><br>
		<h2 align="center"> Create an account.</h2>
		<table align="center">
		<tr>
			<td>Full Name :</td>
			<td><input type="text" name="Name"> </td>				
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="Email"> </td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="password" name="Password"> </td>
		</tr>
		<tr>
			<td>Phone Number :</td>
			<td><input type="text" name="phone"> </td>
		</tr>
		<tr>
			<td>Gender :</td>
			<td colspan="2">
			<input type="radio" name="gender">Male
			<input type="radio" name="gender"> Female
			</td>
		</tr>
		<tr>
			<td>Select Department :</td>
			<td><select>
				<option disabled selected value="Department">Choose One</option>
			    <option>Out Patient Consultation</option>
			    <option>Investigation</option>
			    <option>CT scan</option>
			    <option>MRI</option>
			    <option>Ultra Sound</option>
			    <option>Nuclear Medicine</option>
			    <option>X-ray</option> 
			    <option>Lab Medicine</option>
 			    <option>Vaccination</option> 
 			    <option>Health Screening ( Master health check )</option> 
			    <option>Pharmacy</option>
			    <option>Other</option>
				</select></td>
		</tr>
		<tr>
			<td>Address :</td>
			<td><input type="text" name="Address"> </td>
		</tr>
		<tr>
			<td>Birth Date :</td>
			<td><select name="Date"><option disabled selected>Date</option></select>
            	
           	<select name="Month"> 
			 	<option disabled selected>Month</option>
			 </select>
             
             <select name="year">
              	<option disabled selected>Year</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>Bio :</td>
			<td><textarea></textarea>
		</tr>	
		<tr>
			<td align="right"><button>Back to home</button></td>
			<td align="left"><button>Sign up</button></td>
			<td></td>
		</tr>

		</table>

</body>
</html>