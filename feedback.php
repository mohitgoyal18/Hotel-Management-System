<?php
include('connection.php');
function reg_in()
{
if(isset($_POST['submit']))
{
	$fd = $_POST['feed'];
	if(mysql_query("INSERT INTO `feedback` (`feed`) VALUES ('$fd')"))
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
	echo 'Not cancel';
?>