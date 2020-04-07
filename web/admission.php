<?php include'header.html' ?>
<?php include 'registration.php'?>
	<div class="form">
		<div class="registration">
		<p><span class="error">* required field</span></p><br>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<label for="fname">First Name</label><br>
			<input type="text" name="first" placeholder="First Name" value="<?php echo $first;?>">
			<span class="error">* <?php echo $fnameErr;?></span><br><br>
			<label for="lname">Last Name</label><br>
			<input type="text" name="last" placeholder="Last Name" value="<?php echo $last;?>">
			<span class="error">* <?php echo $lnameErr;?></span><br><br>
			<label for="email">Email</label><br>
			<input type="text" name="email" placeholder="Email" value="<?php echo $email;?>">
			<span class="error">* <?php echo $emailErr;?></span><br><br>
			<label for="phone">Mobile No</label><br>
			<input type="phone" name="phone" placeholder="+880" value="<?php echo $phone;?>">
			<span class="error">* <?php echo $phoneErr;?></span><br><br>
			 Gender:
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
            <span class="error">* <?php echo $genderErr;?></span>
            <br><br>
            <label for="birthday">Birthday</label><br>
            <input type="date" name="birthday"><br><br>
            Course Code:
			<select name="code">
	    	<option value="">select course</option>
		    <option value="MA-101">MA-101</option>
		    <option value="ME-102">ME-202</option>
		    <option value="CA-303">BS-103</option>
	   	    <option value="ME-404">BPS-104</option>
			</select>
			<span class="error">* <?php echo $codeErr;?></span><br><br>
            <input type="submit" name="submit" value="submit">
		</form>
	</div>
		<div class="advertise">
			<div class="advertise_1">
				<img src="res/monkey.gif" alt="monkey" height="400" width="380">
				
			</div>
			<div class="advertise_2">
				<img src="res/cat.gif" alt="cat" height="400" width="380">
				
			</div>

			
		</div>
	</div>
<?php include'footer.html' ?>