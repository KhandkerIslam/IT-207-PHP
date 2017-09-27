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
			if(isset($_POST['deleteSubmit']))
			{
				$deleteID = $_POST['delete'];
				$servername = 'helios.ite.gmu.edu';
				$username = 'kislam8';
				$password = 'eewice';
				$dbname = "kislam8";
			    $link = mysqli_connect($servername,$username,$password,$dbname);
				$displayRows = mysqli_query($link, "SELECT id FROM commenters");
				$check = false;
				while($ids = mysqli_fetch_row($displayRows))
				{
					
					if($ids[0] == $deleteID)
					{
						
						$check = true;
					}
				}
				if($check == true)
				{
					$deleter = mysqli_query($link,"DELETE FROM commenters WHERE id = $deleteID");
					$newRows = mysqli_query($link, "SELECT id FROM commenters");
					while($newIds = mysqli_fetch_row($newRows))
					{
						
						if($newIds[0] > $deleteID)
						{
							$newVal = $newIds[0];
							$comp = $newVal - 1;
							$updater = mysqli_query($link, "UPDATE commenters SET id = '$comp' WHERE id = '$newVal'");
							
						}
						$reset = mysqli_query($link, "ALTER TABLE commenters AUTO_INCREMENT='$newIds[0]'");
						
					}
				}
				else
				{
					echo("There was no match");
					echo("<br>");
				}
			   $displayInfo = mysqli_query($link, "SELECT id, name, comment FROM commenters");
			   if($displayInfo -> num_rows > 0)
			   {
				   while($list = mysqli_fetch_assoc($displayInfo))
				   {
						echo "<br> ID: ". $list["id"]. " - Name: ". $list["name"]. " - Comment: " . $list["comment"] . "<br>";
				   }
			   }
			   else
			   {
				   echo("No comments yet.  Be the first.");
				   echo("<br>");
				   $reset = mysqli_query($link, "ALTER TABLE commenters AUTO_INCREMENT=1");
			   }
				
			}
			?>
						<form action="deletesort.php"method="post">

				Delete: <input type = "number" name = "delete" /> <br />
				Submission: <input type = "submit" name = "deleteSubmit" /> <br />
			</form>
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/comment.php'>All the comments</a>
			<br></br>
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/alphabetsort.php'>Alphabet sort</a>
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/assignment5.php'>New Entry</a>
		</div>

		<div id = "footer">
			
			<p><center><b> Copy Right Content </b></center> </p>
			
		</div>

	</div> <!-- End of pageWrapper -->

	</body>
</html>