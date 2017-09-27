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
				$names = array();
				foreach($myarray as $val)
				{
					$names[] = $val["Name"];
				}
				sort($names);
				$l = 0;
				while($l<count($names))
				{
					for($j = 0; $j<count($names);$j++)
					{
						$list=$myarray[$j];
						if($names[$l]==$list["Name"])
						{
							echo "<br> ID: ". $list["id"]. " - Name: ". $list["Name"]. " - Comment: " . $list["comment"] . "<br>";
							$l++;
						}
					}
				}
			?>
			<form action="deletesort.php"method="post">

				Delete: <input type = "number" name = "delete" /> <br />
				Submission: <input type = "submit" name = "deleteSubmit" /> <br />
			</form>
			
			
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/assignment5.php'>New Entry</a>
			<br></br>
			<a href='http://helios.ite.gmu.edu/~kislam8/IT207/alphabetsort.php'>Alphabet sort</a>
		</div>
		<div id = "footer">
			
			<p><center><b> Copy Right Content </b></center> </p>
			
		</div>

	</div> <!-- End of pageWrapper -->

	</body>
</html>