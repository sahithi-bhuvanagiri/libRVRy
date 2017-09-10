<html>
<head>
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
      	<img src="logoLibrvry.png" alt="Home" onclickstyle="width:304px;height:228px;">
      	<span style="display:block; height: 40px;"></span>

</div>
</center>
</body>
</html>


<?php 
        
  $connection = mysqli_connect("localhost", "root", "");
   mysqli_select_db($connection, "librvry");

	$name=$_POST['name'];
	$ISBN=$_POST['ISBN'];
	$sql4="SELECT numberofbooks FROM bcse WHERE ISBN='$ISBN';";
	$result4=$connection->query($sql4);
	$row4=$result4->fetch_assoc();

        $n=$row4['numberofbooks'];
	if($n>0)
        {
	echo "<html><body><center>Book is available</br></center></body></html>";
        $n=$n-1;
        $sql2 = "UPDATE bcse SET numberofbooks='$n' WHERE ISBN='$ISBN';";
        }
	else
	echo 'book is unavailable';
	$date=$_POST['date'];
	$sql="SELECT numberofbooks FROM userdb WHERE username='$name';";
	$result=$connection->query($sql);
	$row = $result -> fetch_assoc();
	$n=$row['numberofbooks'];
	//echo $n;
	if($n<3)
	{
	$n=$n+1;
	$sql2 = "UPDATE userdb SET numberofbooks=$n WHERE username='$name';";
	$sql3 = "INSERT INTO issuedbooks (ISBN,name,issuedate)
        VALUES ('$ISBN', '$name', '$date')";
	if ($connection->query($sql3) == TRUE)
   	 echo "<html><body><center>Issued book</br></center></body></html>";
	
	}
	
	else
	echo 'you have exceeded your book limit';

?>
	
