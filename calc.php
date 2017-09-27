				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	
	<link rel="StyleSheet" href="./test2.css" />
	<style type="text/css">

	</style>
	
	<title>Grade Calculator</title>

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
					$earnedParticipation = $_POST['earnedParticipation'];

					$maxParticipation = $_POST['maxParticipation'];
				
					$weightParticipation = $_POST['weightParticipation'];
	
					$earnedQuiz = $_POST['earnedQuiz'];
				
					$maxQuiz = $_POST['maxQuiz'];
				
					$weightQuiz = $_POST['weightQuiz'];
				
					$earnedLab = $_POST['earnedLab'];
				
					$maxLab = $_POST['maxLab'];
			
					$weightLab = $_POST['weightLab'];
				
					$earnedPracticum = $_POST['earnedPracticum'];

					$maxPracticum = $_POST['maxPracticum'];

					$weightPracticum = $_POST['weightPracticum'];
				
					function regCalc ($earned,$max)
					{
						$result = ($earned/$max)*100;
						return $result;
					}
					function calcCalc ($earned,$max,$weight)
					{
						$result = regCalc($earned,$max);
						$result = $result*($weight/100);
						return $result;
					}
					function finalGrade($one,$two,$three,$four)
					{
						$result = ($one + $two + $three + $four);
						if($result>=0 && $result < 60)
						{
							echo ("<p><b>Your final grade is a " . $result . "% which is an F<b></p>");
						}
						if($result>=60 && $result < 70)
						{
							echo ("<p><b>Your final grade is a " . $result . "% which is a D<b></p>");
						}
						if($result>=70 && $result < 80)
						{
							echo ("<p><b>Your final grade is a " . $result . "% which is a C<b></p>");
						}
						if($result>=80 && $result < 90 )
						{
							echo ("<p><b>Your final grade is a " . $result . "% which is a B<b></p>");
						}
						if($result>=90)
						{
							echo ("<p><b>Your final grade is a " . $result . "% which is a A<b></p>");
						}

					}
					$regParticipation = regCalc($earnedParticipation,$maxParticipation);
					$regQuiz = regCalc($earnedQuiz,$maxQuiz);
					$regLab = regCalc($earnedLab,$maxLab);
					$regPracticum = regCalc($earnedPracticum,$maxPracticum);
					$calcParticipation = calcCalc($earnedParticipation,$maxParticipation,$weightParticipation);
					$calcQuiz = calcCalc($earnedQuiz,$maxQuiz,$weightQuiz);
					$calcLab = calcCalc($earnedLab,$maxLab,$weightLab);
					$calcPracticum = calcCalc($earnedPracticum,$maxPracticum,$weightPracticum);
					echo ("<p>You earned a " . $regParticipation . "% for Participation," . " with a weighted value of " . $calcParticipation ."%</p>");
					echo "<br>";
					echo ("<p>You earned a " . $regQuiz . "% for Quizzes," . " with a weighted value of " . $calcQuiz ."%</p>");
					echo "<br>";
					echo ("<p>You earned a " . $regLab . "% for Labs," . " with a weighted value of " . $calcLab ."%</p>");
					echo "<br>";
					echo ("<p>You earned a " . $regPracticum . "% for Quizzes," . " with a weighted value of " . $calcPracticum ."%</p>");
					echo "<br>";
					finalGrade($calcParticipation,$calcQuiz,$calcLab,$calcPracticum);
				
	
				?>
		</div>
		<div id = "footer">
			
			<p><center><b> Copy Right Content </b></center> </p>
			
		</div>

	</div> <!-- End of pageWrapper -->

</body>
</html>