<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login | 207 Enterprises</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php
		if(isset($_POST['register']))
		{
			if(empty($_POST['first']) || empty($_POST['last']) || empty($_POST['email']) || empty($_POST['email']))
			{
				echo ("All fields have to be filled");
			}
			if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['email']) && !empty($_POST['email']))
			{
				$first = $_POST['first']."\n";
				$last = $_POST['last']."\n";
				$email = $_POST['email']."\n";
				$password = $_POST['password']."\n";
				file_put_contents('practicume.txt',$email,FILE_APPEND | LOCK_EX);
				file_put_contents('practicume.txt',$first,FILE_APPEND | LOCK_EX);
				file_put_contents('practicume.txt',$last,FILE_APPEND | LOCK_EX);
				file_put_contents('practicume.txt',$password,FILE_APPEND | LOCK_EX);
				echo("File added Succesfully");
				echo("<br></br>");
				echo('<a href="login.php">login</a>');

			}
			
		}
	
	
	?>
</body>
</html>