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
				if(isset($_POST['Submit']))
				{
					if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['comment']))
					{
						echo("<p>Both the first name and Last name must be filled in</p>");
					}
					if(!empty($_POST['name'])&& !empty($_POST['email']) && !empty($_POST['comment']))
					{
							$servername = 'helios.ite.gmu.edu';
							$username = 'kislam8';
							$password = 'eewice';
							$dbname = "kislam8";
							$check = true;
							$name = $_POST['name'];
							$email = $_POST['email'];
							$comment = $_POST['comment'];
							
						   $link = mysqli_connect($servername,$username,$password,$dbname);
						   if (!$link) 
						   {
							  die('Could not connect: ' . mysqli_connect_error());
						   }
						   $result = mysqli_query($link, "SELECT name FROM commenters");
						   	while($row = mysqli_fetch_row($result))
							{
							   if($row[0] == $name)
							   {
								   $check = false;
							   }
							}
						   if($check == true)
						   {
								$sql = "INSERT INTO commenters (name, email, comment)
								VALUES ('$name', '$email', '$comment')";
							   if ($link->query($sql)===TRUE) 
							   {
								   echo "New record created successfully";
								   echo("<br>");
								   echo("Name: " . $name);
								   echo("<br>");
								   echo("Comment: ".$comment);
								   echo("<br>");
								   

							   }
							   else 
							   {
									echo "Error : " . $sql . $link->error;
							   }
						   }
						   else if($check == false)
						   {
							   echo("you already posted a comment");
							   echo("<br>");
						   }

						mysqli_close($link);

					}
				}
			?>
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/comment.php'>All the comments</a>
			<br></br>
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/alphabetsort.php'>Alphabet sort</a>
			<br></br>
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/assignment5.php'>New Entry</a>
		</div>
		<div id = "footer">
			
			<p><center><b> Copy Right Content </b></center> </p>
			
		</div>

	</div> <!-- End of pageWrapper -->

	</body>
</html>