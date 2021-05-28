<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body text="white">

<form action="register_student.php" method="POST">

<center>

	<fieldset style="width: 40%;background-color: black;">
<legend align="center"><b><h3>Register_Student</h3></b></legend>
<br>
	<input type="text" name="Registration_Number" placeholder="Registration_Number" required style="width: 75%; text-align: center;">
	<br><br>

	<input type="text" name="ID_Number" placeholder="ID_Number" required style="width: 75%; text-align: center;">
	<br><br>

		<input type="text" name="First_Name" placeholder="First_Name" required style="width: 75%; text-align: center;">
		<br><br>

		<input type="text" name="Last_Name" placeholder="Last_Name" required style="width: 75%; text-align: center;">
		<br><br>

		<input type="text" name="Phone_Number" placeholder="Phone_Number" required style="width: 75%; text-align: center;">
		<br><br>
        
		
		Gender:<input type="radio" name="Gender" value="Male" required>Male  
		<input type="radio" name="Gender" value="Female" required >Female<br><br>

		<select name="Department" required style="width: 76%; text-align: center;">
		<option>Department</option>
        <option>IT</option>
        <option>ET</option>
        <option>RE</option>
		</select>
		<br><br>

		<select name="Level" required style="width: 76%; text-align: center;">
		<option>Level</option>
        <option>6</option>
        <option>2</option>
        <option>3</option>
		</select>
		<br><br>
        
         <input type="text" name="Class" placeholder="Class" required style="width: 75%; text-align: center;">
		<br><br>

		 <input type="text" name="Academic_Year" placeholder="Academic_Year" required style="width: 75%; text-align: center;">
		<br><br> 

		<button type="submit" style="width: 25%;">Register</button>&nbsp;&nbsp;<button type="reset" style="width: 25%;">Cancel</button>

	</fieldset>

</center>
</form>
</body>
</html>