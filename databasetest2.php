<?php
	$servername = 'helios.ite.gmu.edu';
	$username = 'kislam8';
	$password = 'eewice';
	$dbname = "kislam8";
	
   $link = mysqli_connect($servername,$username,$password,$dbname);
   
   if (!$link) 
   {
      die('Could not connect: ' . mysqli_connect_error());
   }
   $sql = 'CREATE TABLE commenters(
   id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(20) NOT NULL,
   email VARCHAR(20) NOT NULL,
   comment VARCHAR(300) NOT NULL)';
   
   if (mysqli_query($link, $sql)) 
   {
		echo "Table commenters created successfully";
   }
   else 
   {
		echo "Error creating table: " . mysqli_error($link);
   }

	mysqli_close($link);
?>