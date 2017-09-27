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
						$name = $_POST['name'];
						$check = false;
						$email = $_POST['email'];
						$comment = $_POST['comment'];
						$filename = 'testfile2.txt';
						$entry = $name."\n".$email."\n".$comment."\n";
						$entries = array("Entry" => $entry);
						
						$add = array("Name"=>$_POST['name'], "Email"=>$_POST['email'], "Comment"=>$_POST['comment']);
						$names = array("Name"=>$_POST['name']);
						$emails = array("Email"=>$_POST['email']);
						
						if(file_exists("testfile2.txt"))
						{
								$string = file_get_contents('testfile2.txt');
								$arr = explode("\n",$string);
								$count =count($arr) - 1;
								$i = 0;
								while($i<$count)
								{
									if($name == $arr[$i])
									{
										$check = true;
									}
									$i+=3;
								}
								$i = 0;
						
							if($check == true)
							{
								echo("no multiple entries.  comment not added");
							}
							if($check == false)
							{
							
								
								file_put_contents('testfile2.txt',$entry, FILE_APPEND|LOCK_EX);
								$string = file_get_contents('testfile2.txt');
								$arr = explode("\n",$string);
								$count =count($arr) - 1;
								$i = 0;
								$counter = 1;
								while($i<$count)
								{
									$myarray[] = array("id"=>$counter,"Name"=>$arr[$i], "email"=>$arr[$i+1], "comment"=>$arr[$i+2]);
									$i += 3;
									
									$counter++;
								}
								$i=0;
								for($x = 0; $x < count($myarray); $x++)
								{
									$list = $myarray[$x];
									echo "<br> ID: ". $list["id"]. " - Name: ". $list["Name"]. " - Comment: " . $list["comment"] . "<br>";
								}
							} 
						}
						if(!file_exists("testfile2.txt"))
						{
							file_put_contents('testfile2.txt',$entry, FILE_APPEND|LOCK_EX);
							$myarray[] = array("Name"=>$name, "email"=>$email, "comment"=>$comment);
							print_r($myarray);
							
						}
					}
				}
						
				/* 		if(file_exists($filename))
						{
							$string = file_get_contents('testfile.txt');
							$arr = explode("\t",$string);
							for($i = 0; $i < count($arr); $i++)
							{
								if(strpos($arr[$i], $) !== false)
								{
									$check = true;
								}
							}
						} */
					
			?>
						<form action="deletesort1.php"method="post">

				Delete: <input type = "number" name = "delete" /> <br />
				Submission: <input type = "submit" name = "deleteSubmit" /> <br />
			</form>
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/assignment5.php'>New Entry</a>
		</div>
		<div id = "footer">
			
			<p><center><b> Copy Right Content </b></center> </p>
			
		</div>

	</div> <!-- End of pageWrapper -->

</body>
</html>