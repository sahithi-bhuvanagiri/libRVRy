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
        table.center {
    margin-left:auto; 
    margin-right:auto;
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

	$sql="SELECT * FROM wishlist;";
	
	$res = $connection->query($sql);
	
	
     while ($row = $res->fetch_assoc()) {
    echo "<html><center><body><table border=1>
           <tr>
           <th> User Id </th>
           <th> ISBN </th>
           <th> Book Name </th>
           <th> Author </th>
           </tr>
		<tr>
		<td>{$row['userid']}</td>
                <td>{$row['ISBN']}</td>
		<td>{$row['name']}</td>
		<td>{$row['author']}</td>
	</tr></table></body></center></html>";
	} 
?>
	

