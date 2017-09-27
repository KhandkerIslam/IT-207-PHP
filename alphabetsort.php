<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="StyleSheet" href="./test4.css" />
	<style type="text/css">
	</style>
	
	<title>Assignment 5</title>

</head>

	<body>

	<div id="pageWrapper">
		<?php echo readfile("menu.html");?>
		<div id="header">
			<p><center> IT 207,Section 003, Fall </center> </p>
			<p><center> Padigala </center> </p>
			<p><center> George Mason University</center> </p>
			
		</div> <!-- End of header -->
		<?php echo readfile("header.html");?>
		<div id ="text1">
			<?php

				$servername = 'helios.ite.gmu.edu';
				$username = 'kislam8';
				$password = 'eewice';
				$dbname = "kislam8";
				$check = true;
				
			   $link = mysqli_connect($servername,$username,$password,$dbname);
			   if (!$link) 
			   {
				  die('Could not connect: ' . mysqli_connect_error());
			   }
			   $delete = mysqli_query($link,"DROP table alphabet");
			   $create = mysqli_query($link,"CREATE table alphabet LIKE commenters");
			   $insert = mysqli_query($link,"INSERT INTO alphabet SELECT * FROM commenters ORDER BY name");
			   $displayInfo = mysqli_query($link, "SELECT name, comment FROM alphabet");
			   if($displayInfo -> num_rows > 0)
			   {
				   $i=1;
				   while($list = mysqli_fetch_assoc($displayInfo))
				   {
						echo "<br> ID: ". $i. " - Name: ". $list["name"]. " - Comment: " . $list["comment"] . "<br>";
						$i++;
				   }
				   
			   }
			   else
			   {
				    echo("No comments yet.  Be the first.");
			   }


				mysqli_close($link);

			?>
			
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/comment.php'>All the comments</a>
			<br></br>
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/assignment5.php'>New Entry</a>
		</div>
		<div id = "footer">
			
			<p><center><b> Copy Right Content </b></center> </p>
			
		</div>

	</div> <!-- End of pageWrapper -->

	</body>
</html>