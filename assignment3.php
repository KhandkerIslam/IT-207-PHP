<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="StyleSheet" href="./test4.css" />
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
		<?php echo readfile("header.html");?>
		<div id ="text1">
					
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
					
					<div class = "form">
						<form action="cal.php" method="post">
						<select multiple name="MonTime[]">
						<option value="7:00 AM">7:00 AM</option>
						<option value="7:30 AM">7:30 AM</option>
						<option value="8:00 AM">8:00 AM</option>
						<option value="8:30 AM">8:30 AM</option>
						<option value="9:00 AM">9:00 AM</option>
						<option value="9:30 AM">9:30 AM</option>
						<option value="10:00 AM">10:00 AM</option>
						<option value="10:30 AM">10:30 AM</option>
						<option value="11:00 AM">11:00 AM</option>
						<option value="11:30 AM">11:30 AMoption>
						<option value="12:00 PM">12:00 AM</option>
						<option value ="12:30 PM">12:30 AM</option>
						<option value="1:00 PM">1:00 PM</option>
						<option value="1:30 PM">1:30 PM</option>
						<option value="2:00 PM">2:00 PM</option>
						<option value="2:30 PM">2:30 PM</option>
						<option value="3:00 PM">3:00 PM</option>
						<option value="3:30 PM">3:30 PM</option>
						<option value="4:00 PM">4:00 PM</option>
						<option value="4:30 PM">4:30 PM</option>
						<option value="5:00 PM">5:00 PM</option>
						<option value="5:30 PM">5:30 PM</option>
						<option value="6:00 PM">6:00 PM</option>
						<option value ="6:30 PM">6:30 PM</option>
						<option value="7:00 PM">7:00 PM</option>
						<option value="7:30 PM">7:30 PM</option>
						<option value="8:00 PM">8:00 PM</option>
						<option value="8:30 PM">8:30 PM</option>
						<option value="9:00 PM">9:00 PM</option>
						<option value="9:30 PM">9:30 PM</option>
						<option value="10:00 PM">10:00 PM</option>
						</select>	
						</form>
					</div>
					<div class = "form">
						<form action="cal.php" method="post">
						<!----- Select Option Fields Starts Here ----->
						<select multiple name="TueTime[]">
						<option value="7:00 AM">7:00 AM</option>
						<option value="7:30 AM">7:30 AM</option>
						<option value="8:00 AM">8:00 AM</option>
						<option value="8:30 AM">8:30 AM</option>
						<option value="9:00 AM">9:00 AM</option>
						<option value="9:30 AM">9:30 AM</option>
						<option value="10:00 AM">10:00 AM</option>
						<option value="10:30 AM">10:30 AM</option>
						<option value="11:00 AM">11:00 AM</option>
						<option value="11:30 AM">11:30 AMoption>
						<option value="12:00 PM">12:00 AM</option>
						<option value ="12:30 PM">12:30 AM</option>
						<option value="1:00 PM">1:00 PM</option>
						<option value="1:30 PM">1:30 PM</option>
						<option value="2:00 PM">2:00 PM</option>
						<option value="2:30 PM">2:30 PM</option>
						<option value="3:00 PM">3:00 PM</option>
						<option value="3:30 PM">3:30 PM</option>
						<option value="4:00 PM">4:00 PM</option>
						<option value="4:30 PM">4:30 PM</option>
						<option value="5:00 PM">5:00 PM</option>
						<option value="5:30 PM">5:30 PM</option>
						<option value="6:00 PM">6:00 PM</option>
						<option value ="6:30 PM">6:30 PM</option>
						<option value="7:00 PM">7:00 PM</option>
						<option value="7:30 PM">7:30 PM</option>
						<option value="8:00 PM">8:00 PM</option>
						<option value="8:30 PM">8:30 PM</option>
						<option value="9:00 PM">9:00 PM</option>
						<option value="9:30 PM">9:30 PM</option>
						<option value="10:00 PM">10:00 PM</option>
						</select>	
						</form>
					</div>
					
					<div class = "form">
						<form action="cal.php" method="post">
						<!----- Select Option Fields Starts Here ----->
						<select multiple name="WedTime[]">
						<option value="7:00 AM">7:00 AM</option>
						<option value="7:30 AM">7:30 AM</option>
						<option value="8:00 AM">8:00 AM</option>
						<option value="8:30 AM">8:30 AM</option>
						<option value="9:00 AM">9:00 AM</option>
						<option value="9:30 AM">9:30 AM</option>
						<option value="10:00 AM">10:00 AM</option>
						<option value="10:30 AM">10:30 AM</option>
						<option value="11:00 AM">11:00 AM</option>
						<option value="11:30 AM">11:30 AMoption>
						<option value="12:00 PM">12:00 AM</option>
						<option value ="12:30 PM">12:30 AM</option>
						<option value="1:00 PM">1:00 PM</option>
						<option value="1:30 PM">1:30 PM</option>
						<option value="2:00 PM">2:00 PM</option>
						<option value="2:30 PM">2:30 PM</option>
						<option value="3:00 PM">3:00 PM</option>
						<option value="3:30 PM">3:30 PM</option>
						<option value="4:00 PM">4:00 PM</option>
						<option value="4:30 PM">4:30 PM</option>
						<option value="5:00 PM">5:00 PM</option>
						<option value="5:30 PM">5:30 PM</option>
						<option value="6:00 PM">6:00 PM</option>
						<option value ="6:30 PM">6:30 PM</option>
						<option value="7:00 PM">7:00 PM</option>
						<option value="7:30 PM">7:30 PM</option>
						<option value="8:00 PM">8:00 PM</option>
						<option value="8:30 PM">8:30 PM</option>
						<option value="9:00 PM">9:00 PM</option>
						<option value="9:30 PM">9:30 PM</option>
						<option value="10:00 PM">10:00 PM</option>
						</select>	
						</form>
					</div>
					
					<div class = "form">
						<form action="cal.php" method="post">
						<!----- Select Option Fields Starts Here ----->
						<select multiple name="ThursTime[]">
						<option value="7:00 AM">7:00 AM</option>
						<option value="7:30 AM">7:30 AM</option>
						<option value="8:00 AM">8:00 AM</option>
						<option value="8:30 AM">8:30 AM</option>
						<option value="9:00 AM">9:00 AM</option>
						<option value="9:30 AM">9:30 AM</option>
						<option value="10:00 AM">10:00 AM</option>
						<option value="10:30 AM">10:30 AM</option>
						<option value="11:00 AM">11:00 AM</option>
						<option value="11:30 AM">11:30 AMoption>
						<option value="12:00 PM">12:00 AM</option>
						<option value ="12:30 PM">12:30 AM</option>
						<option value="1:00 PM">1:00 PM</option>
						<option value="1:30 PM">1:30 PM</option>
						<option value="2:00 PM">2:00 PM</option>
						<option value="2:30 PM">2:30 PM</option>
						<option value="3:00 PM">3:00 PM</option>
						<option value="3:30 PM">3:30 PM</option>
						<option value="4:00 PM">4:00 PM</option>
						<option value="4:30 PM">4:30 PM</option>
						<option value="5:00 PM">5:00 PM</option>
						<option value="5:30 PM">5:30 PM</option>
						<option value="6:00 PM">6:00 PM</option>
						<option value ="6:30 PM">6:30 PM</option>
						<option value="7:00 PM">7:00 PM</option>
						<option value="7:30 PM">7:30 PM</option>
						<option value="8:00 PM">8:00 PM</option>
						<option value="8:30 PM">8:30 PM</option>
						<option value="9:00 PM">9:00 PM</option>
						<option value="9:30 PM">9:30 PM</option>
						<option value="10:00 PM">10:00 PM</option>
						</select>	
						</form>
					</div>
					
					<div class = "form">
						<form action="cal.php" method="post">
						<!----- Select Option Fields Starts Here ----->
						<select multiple name="FriTime[]">
						<option value="7:00 AM">7:00 AM</option>
						<option value="7:30 AM">7:30 AM</option>
						<option value="8:00 AM">8:00 AM</option>
						<option value="8:30 AM">8:30 AM</option>
						<option value="9:00 AM">9:00 AM</option>
						<option value="9:30 AM">9:30 AM</option>
						<option value="10:00 AM">10:00 AM</option>
						<option value="10:30 AM">10:30 AM</option>
						<option value="11:00 AM">11:00 AM</option>
						<option value="11:30 AM">11:30 AMoption>
						<option value="12:00 PM">12:00 AM</option>
						<option value ="12:30 PM">12:30 AM</option>
						<option value="1:00 PM">1:00 PM</option>
						<option value="1:30 PM">1:30 PM</option>
						<option value="2:00 PM">2:00 PM</option>
						<option value="2:30 PM">2:30 PM</option>
						<option value="3:00 PM">3:00 PM</option>
						<option value="3:30 PM">3:30 PM</option>
						<option value="4:00 PM">4:00 PM</option>
						<option value="4:30 PM">4:30 PM</option>
						<option value="5:00 PM">5:00 PM</option>
						<option value="5:30 PM">5:30 PM</option>
						<option value="6:00 PM">6:00 PM</option>
						<option value ="6:30 PM">6:30 PM</option>
						<option value="7:00 PM">7:00 PM</option>
						<option value="7:30 PM">7:30 PM</option>
						<option value="8:00 PM">8:00 PM</option>
						<option value="8:30 PM">8:30 PM</option>
						<option value="9:00 PM">9:00 PM</option>
						<option value="9:30 PM">9:30 PM</option>
						<option value="10:00 PM">10:00 PM</option>
						</select>	
						</form>
					</div>
					
					<div class = "form">
						<form action="cal.php" method="post">
						<!----- Select Option Fields Starts Here ----->
						<select multiple name="SatTime[]">
						<option value="7:00 AM">7:00 AM</option>
						<option value="7:30 AM">7:30 AM</option>
						<option value="8:00 AM">8:00 AM</option>
						<option value="8:30 AM">8:30 AM</option>
						<option value="9:00 AM">9:00 AM</option>
						<option value="9:30 AM">9:30 AM</option>
						<option value="10:00 AM">10:00 AM</option>
						<option value="10:30 AM">10:30 AM</option>
						<option value="11:00 AM">11:00 AM</option>
						<option value="11:30 AM">11:30 AMoption>
						<option value="12:00 PM">12:00 AM</option>
						<option value ="12:30 PM">12:30 AM</option>
						<option value="1:00 PM">1:00 PM</option>
						<option value="1:30 PM">1:30 PM</option>
						<option value="2:00 PM">2:00 PM</option>
						<option value="2:30 PM">2:30 PM</option>
						<option value="3:00 PM">3:00 PM</option>
						<option value="3:30 PM">3:30 PM</option>
						<option value="4:00 PM">4:00 PM</option>
						<option value="4:30 PM">4:30 PM</option>
						<option value="5:00 PM">5:00 PM</option>
						<option value="5:30 PM">5:30 PM</option>
						<option value="6:00 PM">6:00 PM</option>
						<option value ="6:30 PM">6:30 PM</option>
						<option value="7:00 PM">7:00 PM</option>
						<option value="7:30 PM">7:30 PM</option>
						<option value="8:00 PM">8:00 PM</option>
						<option value="8:30 PM">8:30 PM</option>
						<option value="9:00 PM">9:00 PM</option>
						<option value="9:30 PM">9:30 PM</option>
						<option value="10:00 PM">10:00 PM</option>
						</select>	
						</form>
					</div>
					
					<div class = "form">
						<form action="cal.php" method="post">
						<!----- Select Option Fields Starts Here ----->
						<select multiple name="SunTime[]">
						<option value="7:00 AM">7:00 AM</option>
						<option value="7:30 AM">7:30 AM</option>
						<option value="8:00 AM">8:00 AM</option>
						<option value="8:30 AM">8:30 AM</option>
						<option value="9:00 AM">9:00 AM</option>
						<option value="9:30 AM">9:30 AM</option>
						<option value="10:00 AM">10:00 AM</option>
						<option value="10:30 AM">10:30 AM</option>
						<option value="11:00 AM">11:00 AM</option>
						<option value="11:30 AM">11:30 AMoption>
						<option value="12:00 PM">12:00 AM</option>
						<option value ="12:30 PM">12:30 AM</option>
						<option value="1:00 PM">1:00 PM</option>
						<option value="1:30 PM">1:30 PM</option>
						<option value="2:00 PM">2:00 PM</option>
						<option value="2:30 PM">2:30 PM</option>
						<option value="3:00 PM">3:00 PM</option>
						<option value="3:30 PM">3:30 PM</option>
						<option value="4:00 PM">4:00 PM</option>
						<option value="4:30 PM">4:30 PM</option>
						<option value="5:00 PM">5:00 PM</option>
						<option value="5:30 PM">5:30 PM</option>
						<option value="6:00 PM">6:00 PM</option>
						<option value ="6:30 PM">6:30 PM</option>
						<option value="7:00 PM">7:00 PM</option>
						<option value="7:30 PM">7:30 PM</option>
						<option value="8:00 PM">8:00 PM</option>
						<option value="8:30 PM">8:30 PM</option>
						<option value="9:00 PM">9:00 PM</option>
						<option value="9:30 PM">9:30 PM</option>
						<option value="10:00 PM">10:00 PM</option>
						</select>	
						</form>
					</div>
					<div id = "submit">
						<input name="submit" type="submit" value="Submit">
					</div>
					<?php include'select_value.php'; ?>
			
		</div>
		<div id = "footer">
			
			<p><center><b> Copy Right Content </b></center> </p>
			
		</div>

	</div> <!-- End of pageWrapper -->

</body>
</html>