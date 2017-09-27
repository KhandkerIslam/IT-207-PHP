<?php
if(isset($_POST['submit'])) 
{
	if(!empty($_POST['MonTime'])) 
	{
		foreach ($_POST['MonTime'] as $select)
		{
			echo "<span><b>".$select."</b></span><br/>";
		}
	}		
}
?>