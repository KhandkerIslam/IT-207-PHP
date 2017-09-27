				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	
	<link rel="StyleSheet" href="./part1.css" />
	<style type="text/css">

	</style>
	
	<title>Grade Calculator</title>

</head>

<body>

	<div id="pageWrapper">
		<div id="header">
			<p><center> IT 207,Section 003, Fall </center> </p>

			
		</div> <!-- End of header -->
		<div id ="text1">
			<?php
					$number = 0;
					$candyCount = 0;
					$gumCount = 0;
					$coupons = $_POST['coupons'];
					$couponCopy = $coupons;
					$leftOvers = 0;
					if($coupons>=10)
					{
						while($coupons >= 10 )
						{
							$coupons = $coupons - 10;
							$candyCount += 1;
						}
					}
					if($coupons >=3)
					{
						while($coupons >= 3)
						{
							$coupons = $coupons - 3;
							$gumCount += 1;
							
						}
					}
					if($coupons < 3)
					{
						$leftOvers = $coupons;
						
					}
					echo ("<p>You can get " . $candyCount . " candy bars ");
					echo"<br>";
					for($i = 0; $i<$candyCount; $i++)
					{
						echo("o");
					}
					echo "<br>";
					echo("<p>You can get " . $gumCount . " gum balls ");
					echo "<br>";
					for($i = 0; $i<$gumCount; $i++)
					{
						echo("o");
					}
					echo "<br>";
					echo("<p>You can get " . $leftOvers . " coupons left over ");
					echo "<br>";
					for($i = 0; $i<$leftOvers; $i++)
					{
						echo("o");
					}
					echo "<br>";
					echo "Last modified: ".date ("H:i:s F d Y T.", getlastmod());
					
				?>
				<p> LEGEND: 10 coupons = candybar | 3 coupons = gumball <p>
				<br><br>
				<a href="http://helios.ite.gmu.edu/~kislam8/IT207/part2.html">Back to Form</a>
				
		</div>
	</div> <!-- End of pageWrapper -->

</body>
</html>