<?php
include_once('connection.php');
function reg_in()
{
if(isset($_POST['submit']))
	{
		$rnum = $_POST['rnumber'];
		$ridd = $_POST['rid'];
		$cancel= $_POST['cancel'];
		if(mysql_query("INSERT INTO `login` (`room_number`,`room_id`,`cancel`) VALUES ('$rnum','$ridd','$cancel')"))
		{
			
			header('Location: C:/wamp/www/project/login.html');
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
	echo 'Not cancel';
?>


