<?php
	$servername = 'helios.ite.gmu.edu';
	$username = 'kislam8';
	$password = 'eewice';
	$dbname = "kislam8";
	$check = true;
    $link = mysqli_connect($servername,$username,$password,$dbname);
	mysqli_refresh($link, MYSQLI_REFRESH_TABLES);
	$result = mysqli_query($link, "SELECT email FROM commenters");
	$rows = array();
	while($row = mysqli_fetch_row($result))
	{
		$rows[] = $row;
	};
	echo(sizeof($row));
	print_r($rows);
	for($i= 0; $i<sizeof($row);$i++)
	{
	   echo($row[$i]);
	}
?>