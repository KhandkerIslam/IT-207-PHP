<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Assignment 1</title>

</head>

<body>
	<?php 
		$date = date("d");
		$day = date("N");
		$month = date("n");
		$daysA = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
		$daysAC = $daysA[$day-1];
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
		echo $daysAC;
		
		
	?>

/* 	<div id="pageWrapper">
		<?php echo readfile("menu.html");?>
		<div id="header">
			<p><center> IT 207,Section 003, Fall </center> </p>
			<p><center> Padigala </center> </p>
			<p><center> George Mason University</center> </p>
			
		</div> <!-- End of header -->
		<?php echo readfile("header.html");?>
		<div id ="text1">
			<form action="calc.php"method="post">
				
			</form>
		</div>
		<div id = "footer">
			
			<p><center><b> Copy Right Content </b></center> </p>
			
		</div>

	</div> <!-- End of pageWrapper --> */

</body>
</html>