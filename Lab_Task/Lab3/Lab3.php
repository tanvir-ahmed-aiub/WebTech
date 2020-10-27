<?php

    $name="";
	$err_name="";
	$username="";
	$ur_name="";
	$password="";
	$err_password="";
	$confirm_password="";
	$errconfirm_password="";
	$email="";
	$err_email="";
	$code="";
	$number="";
	$err_phone="";
	$street="";
	$city="";
	$state="";
	$zip="";
	$err_address="";
	$err_caddress="";
	$err_zaddress="";
	$gender="";
	$err_gender="";
    $about="";
	$err_about="";
	$bio="";
	$err_bio="";
	
	
	
	$has_error = false;
	
	if(isset($_POST["register"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(empty($_POST["username"])){
			$ur_name="Username Required";
			$has_error = true;
		}
		elseif((strlen($_POST["username"])<6) || ctype_space(' ')){
            $ur_name="Username must contain at least 6 characters and space is not allowed";
            $has_error=true;
        }
		else{
			$username=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_password="Password Required";
			$has_error = true;
		}
		else{
			$password=$_POST["password"];
		}
		if(empty($_POST["confirm_password"])){
			$errconfirm_password="Confirm Password Required";
			$has_error = true;
		}
		else{
			$confirm_password=$_POST["confirm_password"];
		}
		if(empty($_POST["email"])){
			$err_email="Email Required";
			$has_error = true;
		}
		else{
			$email=$_POST["email"];
		}
		if(empty($_POST["code"]))
		{
			$err_phone = "Code required";
		}
		else if(!is_numeric($_POST["code"]))
		{
			$err_phone = "Numeric charecter required";
		}
		else{$code = htmlspecialchars($_POST["code"]);}
		
		if(empty($_POST["number"]))
		{
			$err_phone = "Number required";
		}
		else if(!is_numeric($_POST["number"]))
		{
			$err_phone = "Numeric charecter required";
		}
		else{ $number = htmlspecialchars($_POST["number"]);
		}
		if(empty($_POST["street"]))
		{
			$err_address = "Required street address";
		}
		else{ $street = htmlspecialchars($_POST["street"]);}
		
		if(empty($_POST["city"]))
		{
			$err_caddress = "Required city and state";
		}
		else{ $city = htmlspecialchars($_POST["city"]);}
		
		if(empty($_POST["state"]))
		{
			$err_caddress = "Required city and state";
		}
		else{ $state = htmlspecialchars($_POST["state"]);}
		
		if(empty($_POST["zip"]))
		{
			$err_zaddress= "Required postal/zip code";
		}
		else{ $zip = htmlspecialchars($_POST["zip"]);
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["about"])){
			$err_about = "Atleast select 1";
			$has_error = true;
		}
		else{
			$about=$_POST["about"];
		}
		if(empty($_POST["bio"])){
			$err_bio="Bio Required";
			$has_error = true;
		}
		else{
			$bio = htmlspecialchars($_POST["bio"]);
		}
		if(!$has_error){
			echo $name;
		}
		//if((!isset($_POST["phone"])){
			
		//}
			
	}
	
?>
<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		
		<hr>
		<form action="" method="post">
			<fieldset>
				<legend><b>Club Member Registration</b></legend>
				<table>
					<tr>
						<td align="right">Name:</td>
						<td><input type="text" name="name"> <?php echo $err_name;?></td>
					</tr>
					<tr>
						<td align="right">Username:</td>
						<td><input type="text" name="username"> <?php echo $ur_name;?></td>
					</tr>
					<tr>
						<td align="right">Password:</td>
						<td><input type="password" name="password"> <?php echo $err_password;?></td>
					</tr>
					<tr>
						<td align="right">Confirm Password:</td>
						<td><input type="password" name="confirm_password"> <?php echo $errconfirm_password;?></td>
					</tr>
					<tr>
						<td align="right">Email:</td>
						<td><input type="text" name="email"> <?php echo $err_email;?></td>
					</tr>
					<tr>
						<td align="right">Phone:</td>
						<td><input type="text" placeholder="code" size="3" name="code"> - 
						<input type="text" placeholder="Number" size="9" name="number"> <?php echo $err_phone;?></td>
					</tr>
					<tr>
					    <td align="right">Address:</td>
						<td><input type="text" placeholder="Street Address" name="street"> <?php echo $err_address;?>
						</td>
					</tr>
					<tr>
					    <td></td>
						<td><input type="text" placeholder="City" size="6" name="city"> - 
						<input type="text" placeholder="State" size="6" name="state"> <?php echo $err_caddress;?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" placeholder="Postal/Zip Code" name="zip"> <?php echo $err_zaddress;?></td>
					</tr>
					<tr>
						<td align="right">Birth Date:</td>
						<td><select style="width:47px">
								<option disabled selected>Day</option>
								<?php
										for($i;$i<=31;$i++){
										echo "<option >$i</option>";
										}
								 ?>								
                          </select>
                          <select style="width:60px">
						        <option disabled selected>Month</option>
								<?php
								        $arr =array("January","February","March","April","May","June","July","August","September");
										foreach($arr as $a){
										echo "<option >$a</option>";
										}
								?>
                          </select>	
                          <select style="width:50px">
						        <option disabled selected>Year</option>
								<?php
										for($i=1980;$i<=2010;$i++){
										echo "<option >$i</option>";
										}
								 ?>
                          </select>						  
						</td>
					</tr>
					<tr>
						<td align="right">Gender:</td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
							&nbsp &nbsp &nbsp &nbsp <?php echo $err_gender;?>
						</td>
					</tr>
					<tr>
						<td align="right">Where did you hear<br> about us?</td>
						<td>
							<input type="checkbox" name="about[]" value="Movies"> A Friend or Colleague <br>
							<input type="checkbox" name="about[]" value="Music"> Google <br>
							<input type="checkbox" name="about[]" value="Programming"> Blog Post &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $err_about;?><br>
							<input type="checkbox" name="about[]" value="Travelling"> News Article 
						</td>
					</tr>
					<tr>
						<td align="right">Bio:</td>
						<td>
							<textarea name="bio" ></textarea> <?php echo $err_bio;?>
						</td>
					</tr>
					<tr>
					    <td></td>
						<td colspan="2" align="left"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>