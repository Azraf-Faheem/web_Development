<html>
<head>
<title>Login</title>
</head>
<body background="../images/user.jpg">
<?php include 'header.php';?>
<form action="../control/User_Login_Validation.php"method="POST" novalidate">


<fieldset>
<legend><h1 align="center"><font color = "red" size="6"> Login</font></h1></legend>


<table  width="20%" height="100px" >


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

</table>
</fieldset>
<h4>
<input type="checkbox"> Remember Me 
<button> Login </button><br><br>
</h4>

</form>
<form>
Forgot Password? <button> Click Here </button> <br>
Don't have an Account?<button><a href="userReg.php" >Click Here </a></button>
</form>
<?php include 'footer.php';?>
</body>
</html>