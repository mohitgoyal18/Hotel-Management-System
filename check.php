<?php
include_once('connection.php');
function reg_in()
{
if(isset($_POST['submit']))
	{
		$check_in = $_POST['in'];
		$check_out = $_POST['out'];
		$room = $_POST['room'];
		$room_type = $_POST['type'];
		if(mysql_query("INSERT INTO `check` (`check_in`,`check_out`,`room`,`room_type`) VALUES ('$check_in','$check_out','$room','$room_type')"))
		{
			
			header('Location: C:/wamp/www/project/index.html');
		}
		else
			echo mysql_error();
	}
}	
if(isset($_POST['submit']))
{
	reg_in();
	//echo ' succesfully inserted';
}
else
	echo 'Not cha';
?> 