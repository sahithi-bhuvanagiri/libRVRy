<?php
   
   $connection = mysqli_connect("localhost", "root", "");
   mysqli_select_db($connection, "librvry");

  $sql = "INSERT INTO wishlist (userid, ISBN, name, author)
VALUES ('y14it804', '0001', 'DAA' , 'Bennett')";

	if($connection->query($sql) == true)
            echo "Successfully added to wishlist";
        else
            echo "error :P";
	
?>