<!DOCTYPE html>
<html>

	<head>
		<title>Signup | DigiConnect </title>
		<link rel="stylesheet" type="text/css" href="css/signup.css">
	</head>

<body>

	<div id="container">
		<div class="sign-in-form">
		<center>	
			<h1>Welcome to DigiConnect - your safe space</h1>
		</center>

			<h2>Sign up</h2>
		<br />
		
		<fieldset class="sign-up-form-1">
		<form method="post" action="signup_form.php" enctype="multipart/form-data">
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>First name</label></td>
					<td><label>Last name </label></td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" placeholder="Indicate your firstname" class="form-1" title="Enter your firstname" required /></td>
					<td><input type="text" name="lastname" placeholder="Indicate your lastname" class="form-1" title="Enter your lastname" required /></td>
				</tr>
				<tr>
					<td><label>User name</label></td>
					<td><label>Repeat user name</label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Indicate your username" class="form-1" title="Enter your username" required /></td>
					<td><input type="text" name="username2" class="form-1" title="Enter your username" required /></td>
				</tr>
				<tr>
					<td colspan="2"></td>
				</tr>
			</table>
		</fieldset>
		
		<br />		
		
		<fieldset class="sign-up-form-1">
			<legend>Profile </legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Birthday</label></td>
					<td>
					<select name=day style="font-size:18px;" required>
					<?php

					$day=1;
					while($day<=31)
					  {
					  echo "<option> $day
					  </option>";
					  $day++;
					  }
					?>
					</select>
					<select name=month style="font-size:18px;" required>
						<option>January</option>
						<option>Febuary</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					<select name=year style="font-size:18px;" required>
					<?php
					$year=1901;
					while($year<=2022)
					  {
					  echo "<option> $year
					  </option>";
					  $year++;
					  }
					?>
					</select>
					</td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td>
					<label>Male</label><input type="radio" name="gender" value="male" required />
					<label>Female</label><input type="radio" name="gender" value="female" required />
					</td>
				</tr>
				<tr>
					<td><label>Mobile number</label></td>
					<td><input type="text" name="number" placeholder="05" maxlength="13" class="form-1" title="Enter your mobile number" required /></td>
				</tr>
			</table>
		</fieldset>
		
		<br />
		
		<fieldset class="sign-up-form-1">
			<legend>Log in information*</legend>
			<table cellpadding="5" cellspacing="5">
				<tr>
					<td><label>Your email address</label></td>
					<td><label>Repeat email</label></td>
				</tr>
				<tr>
					<td><input type="text" name="email" placeholder="Indicate your email address" class="form-1" title="Enter your firstname" required /></td>
					<td><input type="text" name="email2" class="form-1" title="Indicate your lastname" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: your email address is secured.</td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><label>Repeat password</label></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Indicate your password" class="form-1" title="Enter your username" required /></td>
					<td><input type="password" name="password2" class="form-1" title="Enter your username" required /></td>
				</tr>
				<tr>
					<td colspan="2">Note: your password is secured.</td>
				</tr>
			</table>
		</fieldset>
		
			
		<br />
		<br />
					<input type="submit" name="submit" value="Sign up" class="btn-sign-in" title="Log in" />
		</form>
		
		</div>
	</div>

</body>

</html>