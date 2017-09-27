<?php
	$servername = "helios.ite.gmu.edu";
	$username = "kislam8";
	$password = "eewice";

	// Create connection
	$conn = mysqli_connect($servername ,$username, $password);
	$test = mysqli_create_db("test");
/* 	if(!mysqli_query($conn, "USE test"))
	{
		$database = "CREATE DATABASE test";
		$QueryResult = @mysqli_query($conn,$database)or
		die(mysqli_error($conn));
		echo "Created the database";
		mysqli_query($conn,"USE test");
	} */
	// Check connection
	mysqli_close($conn);
?>