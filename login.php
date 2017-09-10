<html>
<head>
	<title>RVR Library Management</title>
	<style>
	body 
	{
		height: 1000px;
		background: linear-gradient(135deg, #2929a3 0%,#a50d9e 69%,#d7675b 100%) fixed;
		background-size: 100% 100%; 
		text-allign:center;
		color:white;
	}
	img
	{
		border-radius: 80%;
	}
	.container
	{
		padding: 16px;
	}
	input[type=text], input[type=password]
	{
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
	}
	button
	{
		background-color:violet;
		color:white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
	}
	button:hover
	{
		opacity: 0.8;
	}
	span.psw
	{
		float:center;
		padding-top: 16px;
	}
	</style>
</head>
<body>
<center>
<form  action="validation.php" method="POST">
<div class="logo">
      	<img src="logoLibrvry.png" alt="Home" onclickstyle="width:304px;height:228px;" onclick="location.href='login.php'">
      	<span style="display:block; height: 40px;"></span>

</div>
<div class="container">
    <label><font size="5"><b>Username</b></font></label>
    <input type="text" placeholder="Enter Username" id="username" name="username" required>

    <br><br><label><font size="5"><b>Password</b></font></label>
    <input type="password" placeholder="Enter Password" id="password" name="password" required>
        
<div class="container">
   <span class="psw" a href="#">Forgot password?</a></span><br>
</div>
	<input type="submit" id="btn" value="Login" /><br>
	<input type="checkbox" checked="checked"> Remember me
</center>
</body>
</html>
