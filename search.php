<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	
	<link rel="StyleSheet" href="./test4.css" />
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
					if(isset($_POST['Search']))
					{
						if(empty($_POST['fname']) || empty($_POST['lname']))
						{
							echo("<p>Both the first name and Last name must be filled in</p>");
							echo("<a href='http://helios.ite.gmu.edu/~kislam8/IT207/assignment4.php'>Back to search directory</a>");
						}
						if(!empty($_POST['fname'])&&!empty($_POST['lname']))
						{
							$tag = $_POST['fname'].$_POST['lname'];
							$fname = $tag."first|".$_POST['fname']."\t";
							$lname = $tag."last|".$_POST['lname']."\t";
							$check = false;
							$filename = 'testfile.txt';
							if(file_exists($filename))
							{
									$string = file_get_contents('testfile.txt');
									$arr = explode("\t",$string);
									for($i = 0; $i < count($arr); $i++)
									{
										if(strpos($arr[$i], $tag) !== false)
										{
											$check = true;
										}
									}
							}
							if($check == true)
							{
								$fnamecheck = $tag."first|";
								$lnamecheck = $tag."last|";
								$addresscheck = $tag."address|";
								$phonecheck = $tag."phone|";
								$emailcheck = $tag."email|";
								$statecheck = $tag."state|";
								$citycheck = $tag."city|";
								$zipcheck = $tag."zip|";
								$address = "";
								$phone = "";
								$email = "";
								$state = "IN";
								for($i = 0; $i < count($arr); $i++)
								{
									if(strpos($arr[$i], $tag) !== false)
									{
										if(strpos($arr[$i], $addresscheck) !== false)
										{
											$addresstemp=$arr[$i];
											$address = str_replace($addresscheck,"",$addresstemp);
										}
										if(strpos($arr[$i], $phonecheck) !== false)
										{
											$phonetemp=$arr[$i];
											$phone = str_replace($phonecheck,"",$phonetemp);
										}
										if(strpos($arr[$i], $emailcheck) !== false)
										{
											$emailtemp=$arr[$i];
											$email = str_replace($emailcheck,"",$emailtemp);
										}
										if(strpos($arr[$i], $statecheck) !== false)
										{
											$statetemp=$arr[$i];
											$state = str_replace($statecheck,"",$statetemp);
										}
										if(strpos($arr[$i], $citycheck) !== false)
										{
											$citytemp=$arr[$i];
											$city = str_replace($citycheck,"",$citytemp);
										}
										if(strpos($arr[$i], $zipcheck) !== false)
										{
											$ziptemp=$arr[$i];
											$zip = str_replace($zipcheck,"",$ziptemp);
										}
									}
								}
								
							}
							echo("<form action='search.php' method='post'>
												<h3>Update</h3>
												First Name: <input type='text' name='fName' readonly  value = '$_POST[fname]'>
												Last Name: <input type='text' name='lName' readonly value = '$_POST[lname]'>
												Email Address: <input type='text' name='email' value = $email>
												Phone Number: <input type='text' name='phoneNum' value = '$phone'>
												Address: <input type='text' name='address' value = '$address'>
												State: <select name='state' value = '$state'>
														<option selected='selected' value='$state'>$state</option>
														<option value='Alabama'>Alabama</option>
														<option value='Alaska'>Alaska</option>
														<option value='Arizona'>Arizona</option>
														<option value='Arkansas'>Arkansas</option>
														<option value='California'>California</option>
														<option value='Colorado'>Colorado</option>
														<option value='Connecticut'>Connecticut</option>
														<option value='Delaware'>Delaware</option>
														<option value='District Of Columbia'>District Of Columbia</option>
														<option value='Florida'>Florida</option>
														<option value='Georgia'>Georgia</option>
														<option value='Hawaii'>Hawaii</option>
														<option value='Idaho'>Idaho</option>
														<option value='Illinois'>Illinois</option>
														<option value='Indiana'>Indiana</option>
														<option value='Iowa'>Iowa</option>
														<option value='Kansas'>Kansas</option>
														<option value='Kentucky'>Kentucky</option>
														<option value='Louisiana'>Louisiana</option>
														<option value='Maine'>Maine</option>
														<option value='Maryland'>Maryland</option>
														<option value='Massachusetts'>Massachusetts</option>
														<option value='Michigan'>Michigan</option>
														<option value='Minnesota'>Minnesota</option>
														<option value='Mississippi'>Mississippi</option>
														<option value='Missouri'>Missouri</option>
														<option value='Montana'>Montana</option>
														<option value='Nebraska'>Nebraska</option>
														<option value='Nevada'>Nevada</option>
														<option value='New Hampshire'>New Hampshire</option>
														<option value='New Jersey'>New Jersey</option>
														<option value='New Mexico'>New Mexico</option>
														<option value='Ney York'>New York</option>
														<option value='North Carolina'>North Carolina</option>
														<option value='North Dakota'>North Dakota</option>
														<option value='Ohio'>Ohio</option>
														<option value='Oklahoma'>Oklahoma</option>
														<option value='Oregon'>Oregon</option>
														<option value='Pennsylvania'>Pennsylvania</option>
														<option value='Rhode Island'>Rhode Island</option>
														<option value='South Carolina'>South Carolina</option>
														<option value='South Dakota'>South Dakota</option>
														<option value='Tennessee'>Tennessee</option>
														<option value='Texas'>Texas</option>
														<option value='Utah'>Utah</option>
														<option value='Vermont'>Vermont</option>
														<option value='Virginia'>Virginia</option>
														<option value='Washington'>Washington</option>
														<option value='West Virginia'>West Virginia</option>
														<option value='Wisconsin'>Wisconsin</option>
														<option value='Wyoming'>Wyoming</option>
												</select><br />
												City: <input type='text' name='city' value = '$city'>
												Zip: <input type='number' name='zipNum' value = '$zip'>
												<input type='submit' name='Submit'>
											</form>");
							echo("<a href='http://helios.ite.gmu.edu/~kislam8/IT207/assignment4.php'>Back to search directory</a>");
		
						}
					}
						
						if(isset($_POST['Submit']))
						{
							
							if(empty($_POST['fName']) || empty($_POST['lName']) || empty($_POST['email']) || empty($_POST['phoneNum']) || empty($_POST['address']) || empty($_POST['city']) || empty($_POST['zipNum']))
							{
								echo ("All fields have to be filled");
							}
							else
							{
									$tag = $_POST['fName'].$_POST['lName'];
									$check = false;
									$fname = $tag."first|".$_POST['fName']."\t";
									$lname = $tag."last|".$_POST['lName']."\t";
									$filename = 'testfile.txt';
									if(!file_exists($filename))
									{
										file_put_contents('testfile.txt',$fname,FILE_APPEND | LOCK_EX);
										file_put_contents('testfile.txt',$lname,FILE_APPEND | LOCK_EX);
									}
									if(file_exists($filename))
									{
											$string = file_get_contents('testfile.txt');
											$arr = explode("\t",$string);
											for($i = 0; $i < count($arr); $i++)
											{
												if(strpos($arr[$i], $tag) !== false)
												{
													$check = true;
												}
											}
											if($check == true)
											{
												for($i = 0; $i < count($arr); $i++)
												{
													if(strpos($arr[$i], $tag) !== false)
													{
														unset($arr[$i]);
													}
												}
												$myfile = fopen('testfile.txt','w');
												$arrTwo = implode("\t",$arr);
												file_put_contents('testfile.txt',$arrTwo,FILE_APPEND | LOCK_EX);
												$fname = $tag."first|".$_POST['fName']."\t";
												$lname = $tag."last|".$_POST['lName']."\t";
												$address = $tag."address|".$_POST['address']."\t";
												$phone = $tag."phone|".$_POST['phoneNum']."\t";
												$email = $tag."email|".$_POST['email']."\t";
												$state = $tag."state|".$_POST['state']."\t";
												$city = $tag."city|".$_POST['city']."\t";
												$zip = $tag."zip|".$_POST['zipNum']."\t\n";
												file_put_contents('testfile.txt',$fname,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$lname,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$address,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$phone,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$email,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$state,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$city,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$zip,FILE_APPEND | LOCK_EX);
											}
											elseif($check == false)
											{
												$fname = $tag."first|".$_POST['fName']."\t";
												$lname = $tag."last|".$_POST['lName']."\t";
												$address = $tag."address|".$_POST['address']."\t";
												$phone = $tag."phone|".$_POST['phoneNum']."\t";
												$email = $tag."email|".$_POST['email']."\t";
												$state = $tag."state|".$_POST['state']."\t";
												$city = $tag."city|".$_POST['city']."\t";
												$zip = $tag."zip|".$_POST['zipNum']."\t\n";
												file_put_contents('testfile.txt',$fname,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$lname,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$address,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$phone,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$email,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$state,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$city,FILE_APPEND | LOCK_EX);
												file_put_contents('testfile.txt',$zip,FILE_APPEND | LOCK_EX);
											}
									}
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