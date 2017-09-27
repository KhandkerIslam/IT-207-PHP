<!DOCTYPE html>
<html>
<head>
<title>PHP Get Value of Select Option and Radio Button</title> <!-- Include CSS File Here-->
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="main">
<h2>PHP Multiple Select Options and Radio Buttons</h2>
<form action="form.php" method="post">
<!----- Select Option Fields Starts Here ----->
<label class="heading">To Select Multiple Options Press ctrl+left click :</label>
<select multiple name="Time[]">
<option value="Red">7:00</option>
<option value="Green">7:30</option>
<option value="Blue">8:00</option>
<option value="Pink">8:30</option>
<option value="Yellow">9:00</option>
<option value="White">9:30</option>
<option value="Black">10:00</option>
<option value="Violet">10:30</option>
<option value="Limegreen">11:00</option>
<option value="Brown">11:30</option>
<option value="Orange">12:00</option>
</select>
<?php include'select_value.php'; ?>
<input name="submit" type="submit" value="Get Selected Values">
<!---- Radio Button Starts Here ----->
