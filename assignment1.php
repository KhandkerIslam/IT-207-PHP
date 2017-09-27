<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="StyleSheet" href="./test2.css" />
	<style type="text/css">
	</style>
	
	<title>Assignment 1</title>

</head>

<body>

	<div id="pageWrapper">
		<?php echo readfile("menu.html");?>
		<div id="header">
			<p><center> IT 207,Section 003, Fall </center> </p>
			<p><center> Padigala </center> </p>
			<p><center> George Mason University</center> </p>
			
		</div> <!-- End of header -->
		<?php echo readfile("header.php");?>
		<div id ="text1">
			<form action="calc.php"method="post">

				<h3>Participation</h3>
				Earned: <input type="number" name="earnedParticipation">
				Max: <input type="number" name="maxParticipation">
				Weight (percentage): <input type="number" name="weightParticipation">
				<h3>Quizzes</h3>
				Earned: <input type="number" name="earnedQuiz">
				Max: <input type="number" name="maxQuiz">
				Weight (percentage): <input type="number" name="weightQuiz">
				<h3>Lab Assignments</h3>
				Earned: <input type="number" name="earnedLab">
				Max: <input type="number" name="maxLab">
				Weight (percentage): <input type="number" name="weightLab">
				<h3>Practica</h3>
				Earned: <input type="number" name="earnedPracticum">
				Max: <input type="number" name="maxPracticum">
				Weight (percentage): <input type="number" name="weightPracticum">
				<br><br>
				<input type="submit" name="submit1">
				
			</form>
		</div>
		<div id = "footer">
			
			<p><center><b> Copy Right Content </b></center> </p>
			
		</div>

	</div> <!-- End of pageWrapper -->

</body>
</html>