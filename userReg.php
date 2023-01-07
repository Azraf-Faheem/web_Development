<html>
<head>
<title>Registration</title>
</head>
<body background="../images/user.jpg">
<?php include 'header.php';?>
<p align="left"><button style="background-color:white;"><a href="homepage.php">Home Page</a></button></p>



<form action="../control/User_Registration_Validation.php"method="POST" novalidate">


<fieldset>
<legend><h1 align="center"><font color = "red" size="6"> Registration</font></h1></legend>


<table  width="40%" height="600px" >


<tr>
<th align="left">
<label>User Name</label></th>
<th><input type="text" name="username"></th>
</tr>

<tr>
<th align="left">
<label>Password</label></th>
<th><input type="password" name="password"></th>
</tr>

<tr>
<th align="left">
<label>Confirm Password</label></th>
<th><input type="password" name="confirm_password"></th>
</tr>

<tr>
<th align="left">
<label>First Name</label></th>
<th><input type="text" name="frstname"></th>
</tr>

<tr>
<th align="left">
<label>Last Name</label></th>
<th><input type="text" name="lastname"></th>
</tr>

<tr >
<th align="left">
<label>Gender</label></th>
<th>
<input type="radio" name="gender">Male 
<input type="radio" name="gender">Female
<input type="radio" name="gender">Other
</th>
</tr>

<tr>
<th align="left"><label>Age</label></th>
<th><input type="number" name="age"></th>
</tr>


<tr>
<th align="left">
<label>Address</label></th>
<th><input type="text" name="address"></th>
</tr>


<tr >
<th align="left">
<label>Mobile No.</label></th>
<th><input type="text" name="mobile"></th>
</tr>


<tr>
<th align="left"><label>Email</label></th>
<th><input type="email" name="email"></th>
</tr>



<tr>
<th align="left"><label>Upload NID</label></th>
<th align="right"><input type="file" name="NidUpload" id="NidUpload"></th>
</tr>


<tr>
<th align="left"><label>Upload Driving License</label></th>
<th align="right"><input type="file" name="DrivingUpload" id="DrivingUpload"></th>
</tr>



</th>
</tr>

</table>
</fieldset>
<h4 align="center">
<input type="checkbox" name= "Checked" value="Checked">I am agree to submit my original NID to get a bike untill I return it <br><br> 
<input type="Submit">
</h4>

</form>
</fieldset>
<?php include 'footer.php';?>
</body>
</html>