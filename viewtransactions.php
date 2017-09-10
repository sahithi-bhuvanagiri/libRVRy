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
	span.psw
	{
		float:center;
		padding-top: 16px;
	}
       
	</style>
</head>
<body>
<center>
<div class="logo">
      	<img src="logoLibrvry.png" alt="Home" onclickstyle="width:304px;height:228px;" onclick="location.href='login.php'">
      	<span style="display:block; height: 40px;"></span>

</div>
</center>
</html>

<?php	
     $connection = mysqli_connect("localhost", "root", "");
   mysqli_select_db($connection, "librvry");

	$sql="SELECT * FROM issuedbooks;";
	
	$res = $connection->query($sql);
	
     // output data of each row

	while ($row = $res->fetch_assoc()) {
    echo "<html><center>
          <table border=1>
           <tr>
           <th>Book Number</th>
           <th>Name</th>
           <th>Issue Date</th>
           </tr>
		<tr>
                <td>{$row['ISBN']}</td>
                <td>{$row['name']}</td>
		<td>{$row['issuedate']}</td>
	</tr></center></table></html>";
	} 
?>
	