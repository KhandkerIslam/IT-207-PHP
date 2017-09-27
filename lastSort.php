<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login | 207 Enterprises</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php
		if(isset($_POST['sort']))
		{
			echo('<h1>207 Enterprises</h1>');
			echo('<h2>Registered Users</h2>');
			echo('<form action = "lastSort.php" method = "post">
		  <select name = "option">
		  <option value="last">Last</option>
		  <option value="first">First</option>
		  <option value="email">Email</option>
		  </select>
		  <input name="sort" type="submit" value="sort" />');
			if($_POST['option']=='last')
			{
					$string = file_get_contents('practicume.txt');
					$arr = explode("\n",$string);
					$count =count($arr);
					$i = 0;
					while($i<$count)
					{
						$myarray[] = array("email"=>$arr[$i], "first"=>$arr[$i+1], "last"=>$arr[$i+2],"password"=>$arr[$i+3]);
						$i += 4;
					}
					$i=0;
					$lasts = array();
					foreach($myarray as $val)
					{
						$lasts[] = $val["last"];
					}
					sort($lasts);
					$l = 0;
					while($l<count($lasts))
					{
						for($j = 0; $j<count($lasts);$j++)
						{
							$list=$myarray[$j];
							if($lasts[$l]==$list["last"])
							{
								echo "<br> Last: ". $list["last"]. " - First: ". $list["first"]. " - Email: " . $list["email"] . "<br>";
								$l++;
							}
						}
					}
					echo("Total Users: ".$count/4);
			}
			if($_POST['option']!='last')
			{
				echo("Not supported");
				echo("<br></br>");
				$string = file_get_contents('practicume.txt');
				$arr = explode("\n",$string);
				$count =count($arr);
				$i = 0;
				while($i<$count)
				{
					$myarray[] = array("email"=>$arr[$i], "first"=>$arr[$i+1], "last"=>$arr[$i+2],"password"=>$arr[$i+3]);
					$i += 4;
					
				}
				$i=0;
				for($x = 0; $x < count($myarray); $x++)
				{
					$list = $myarray[$x];
					echo "<br> Last: ". $list["last"]. " - First: ". $list["first"]. " - Email: " . $list["email"] . "<br>";
				}
			}
		}
		echo('<a href="logout.php">Logout</a>');
		
	?>

</body>
</html>