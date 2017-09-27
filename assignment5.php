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
			<h1>Online Contacts Directory<h1>
			<br>
			<h2>Search for a Contact<h2>
			<br>
			<form action="posting.php"method="post">

				Name: <input type = "text" name = "name" /> <br />
				E-Mail: <input type = "text" name = "email" /> <br />
				<textarea name = "comment" rows="4" cols="50"></textarea>
				Submission: <input type = "submit" name = "Submit" /> <br />
				<button type="reset" value="Reset">Reset</button>
			
			</form>
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/entrydirectory.php'>New Entry</a>
		</div>
		<div id = "footer">
			
			<p><center><b> Copy Right Content </b></center> </p>
			
		</div>

	</div> <!-- End of pageWrapper -->

</body>
</html>