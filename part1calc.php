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
					$weight = $_POST['weight'];

					$running = $_POST['duration'];
				
					$basketball = $_POST['Basketball'];
	
					$sleeping = $_POST['Sleep'];
					
					define("KGCONVERT",2.20);
					
					define("RMET",10);
					
					define("BMET",8);
					
					define("SMET",60);
					
					define("CALCONSTANT",.0175);
					
					$weightKG = $weight / KGCONVERT;
					
					$RunningMET = RMET * CALCONSTANT;
					
					$BasketballMET = BMET * CALCONSTANT;
					
					$SleepingMET = SMET * CALCONSTANT;
					
					
				
					function runCalc ($RunningMET,$weightKG,$running)
					{
						$result = $weightKG*$RunningMET*$running;
						return $result;
					}
					function basketballCalc ($BasketballMET,$weightKG,$basketball)
					{
						$result = $weightKG*$BasketballMET*$basketball;
						return $result;
					}
					function sleepCalc ($SleepingMET,$weightKG,$sleeping)
					{
						$result = $weightKG*$SleepingMET*$sleeping;
						return $result;
					}
					function totalCalc($regRun,$regBasketball,$regSleep)
					{
						$result = $regRun + $regBasketball + $regSleep;
						echo("<p>The total calories burned were: " .$result);
					}
					$regRun = runCalc($RunningMET,$weightKG,$running);
					settype($regRun,"int");
					echo ("<p>You burned " . $regRun . "calories while running ");
					echo "<br>";
					$regBasketball = basketballCalc($BasketballMET,$weightKG,$basketball);
					settype($regBasketball,"int");
					echo ("<p>You burned " . $regBasketball . "calories while playing basketball ");				
					echo "<br>";
					$regSleep = sleepCalc($SleepingMET,$weightKG,$sleeping);
					settype($regSleep,"int");
					echo ("<p>You burned " . $regSleep . "calories while sleeping ");				
					echo "<br>";
					totalCalc($regRun,$regBasketball,$regSleep);
					echo "<br>";
					
					echo "Last modified: ".date ("H:i:s F d Y T.", getlastmod());
					
				?>
				<br><br>
				<a href="http://helios.ite.gmu.edu/~kislam8/IT207/part1.html">Back to Form</a>
				
		</div>
	</div> <!-- End of pageWrapper -->

</body>
</html>