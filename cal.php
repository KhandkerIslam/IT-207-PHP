<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="StyleSheet" href="./test3.css" />
	<style type="text/css">
	</style>
	
	<title>Assignment 1</title>

</head>

<body>
	<?php 
		$date = date("d");//the date of the month in numerical format
		$day = date("N");//the day of the month in words starting with 1 and ending with 7
		$month = date("n");//the month in numerical format
		$daysA = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
		$daysAC = $daysA[$day-1];//from 0 to 6
		$dayC = $day -1;
		while($date != 1)
		{
			$date--;
         if($daysAC == $daysA[0] && $date != 1)
         {
            $daysAC = $daysA[6];
            $dayC = 6;
         }
         else
         {
            $dayC = $dayC - 1;
            $daysAC = $daysA[$dayC];
         }
		   
		}
		$firstDay = $daysAC;
		$firstDayCount = $dayC;
		echo $dayC;
		
	?>
	<?php
		$daysOfMonth = 0;
		if($month == 1 ||$month == 3 ||$month == 5 ||$month == 7 ||$month == 8 ||$month == 10 ||$month == 12)
		{
			$daysOfMonth = 31;
		}	
		if($month == 4 ||$month == 6 ||$month == 9 ||$month == 11)
		{
			$daysOfMonth = 30;
		}
		if($month == 2)
		{
			$daysOfMonth = 28;
		}
	?>
	<div id="pageWrapper">
		<?php echo readfile("menu.html");?>
		<div id="header">
			<p><center> IT 207,Section 003, Fall </center> </p>
			<p><center> Padigala </center> </p>
			<p><center> George Mason University</center> </p>
			
		</div> <!-- End of header -->
		<?php echo readfile("header.html");?>
		<div id ="text1">
			<div id = "calHead">
				<?php
				echo date("F");
				?>
			</div>
			<div class = "Week">
				<p><center> Mon </center> </p>
			</div>
			<div class = "Week">
				<p><center> Tue </center> </p>
			</div>
			<div class = "Week">
				<p><center> Wed </center> </p>
			</div>
			<div class = "Week">
				<p><center> Thur </center> </p>
			</div>
			<div class = "Week">
				<p><center> Fri </center> </p>
			</div>
			<div class = "Week">
				<p><center> Sat </center> </p>
			</div>
			<div class = "Week">
				<p><center> Sun </center> </p>
			</div>
			<?php
			
				$counter = 0;
				$result = 0;
				$i = 0;
				$x = 0;
				$solid = 35;
				$dayCheck = 0;
				
				while($i<$solid)
				{
					$counter++;
					if($dayCheck < $dayC || $i > $daysOfMonth)
					{
						$dayCheck++;
						$i++;
						echo '<div class = "Week">
							
							</div>';
					}
					while($dayCheck >= $dayC && $x < $daysOfMonth)
					{
						$result++;
						$x++;
						$i++;
						echo'<div class = "Week">$result<form><input type="radio" name="test" value="test"></form></div>';
					}		

				}
			?>
		</div>

		<div id = "footer">
			
			<p><center><b> Copy Right Content </b></center> </p>
			
		</div>

	</div> <!-- End of pageWrapper -->

</body>
</html>