<html>
<head>
<Title>Student Registration Form</title>
</head>
<body>
<form action="formDisplay.php" method=POST>
<b>ID:</b><input type="text" name="StudentID"><br><br>
<b>Name:</b><input type="text" name="StudentName" placeholder="Enter your Name"><br><br>
<b>Parentage:</b><input type="text" name="StudentParentage" placeholder="Enter your Name"><br><br>
<b>Address:</b><input type="text" name="StudentAddress" placeholder="Enter your Name"><br><br>
<b>email id:</b><input type="text" name="StudentEmail" placeholder="Enter your Name"><br><br>
<b>Cell No:</b><input type="number" name="StudentCell" placeholder="Enter your Name"><br><br>
<b>Qualification:</b>
<select name="StudentQual">
				 <option  value="MCA">MCA</option>
				 <option  value="BE">BE</option>
				 <option  value="M Tech">Mtech</option>
				 <option  value="BCA">Btech</option>
				</select><br><br>
<b><label>Gender:</label>
<input type="Radio" name="StudentGend" value="M">Male
<input type="Radio" name="StudentGend" value="F">Female<br><br>
<label>Hobbies</label><br>
<input type="CheckBox" name="Hobb[]" value="Programming">Programming<br>
<input type="CheckBox" name="Hobb[]" value="Cricket">Cricket<br>
<input type="CheckBox" name="Hobb[]" value="Music">Music<br>
<input type="CheckBox" name="Hobb[]" value="Swimming">Swimming<br>
<input type="CheckBox" name="Hobb[]" value="Reading">Reading<br>
<b>UserName:</b><input type="text" name="StudentUserName"><br><br>
<b>Password:</b><input type="password" name="StudentPassword"><br>



<hr>
<input type="submit" name="register" value="Register">
<input type="submit" name="can" value="Cancel">


</body>
</html>