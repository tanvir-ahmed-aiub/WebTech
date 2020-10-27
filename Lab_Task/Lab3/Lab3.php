<?php

	$gender="";
	$err_gender="";
	$hobbies="";
	$err_hobbies="";
	$profession="";
	$err_profession="";
	$name="";
	$err_name="";
	
	$has_error = false;
	
	if(isset($_POST["register"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$has_error = true;
		}elseif(strpos($_POST["name"],"abcd")){
			$err_name="Consequtive abcd cant not be a name";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["hobbies"])){
			$err_hobbies = "Atleast select 1 hobby";
			$has_error = true;
		}
		else{
			$hobbies=$_POST["hobbies"];
		}
		
		if(!$has_error){
			echo $name;
		}
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
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align="right">Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td align="right">Confirm Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td align="right">Email:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td align="right">Phone:</td>
						<td><input type="text" placeholder="code" size="3"> - 
						<input type="text" placeholder="Number" size="9"</td>
					</tr>
					<tr>
					    <td></td>
						<td><input type="text" placeholder="City" size="6"> - 
						<input type="text" placeholder="State" size="6">
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="text" placeholder="Postal/Zip Code"></td>
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
								        $arr =array("January","February","March","April","May","June","July");
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
						<td align="right">Gender: <?php echo $err_gender;?></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					<tr>
						<td align="right">Where did you hear<br> about us?<?php echo $err_hobbies;?></td>
						<td>
							<input type="checkbox" name="about[]" value="Movies"> A Friend or Colleague <br>
							<input type="checkbox" name="about[]" value="Music"> Google <br>
							<input type="checkbox" name="about[]" value="Programming"> Blog Post<br>
							<input type="checkbox" name="about[]" value="Travelling"> News Article <br>
						</td>
					</tr>
					<tr>
						<td align="right">Bio:</td>
						<td>
							<textarea name="io" ></textarea>
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