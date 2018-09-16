<?php
include('connection.php');
function reg_in()
{
if(isset($_POST['submit']))
{
	$card_type = $_POST['type'];
	$m = $_POST['month'];
	$y = $_POST['year'];
	$card_no = $_POST['num'];
	$card_name = $_POST['name'];
	$c_no = $_POST['cvv'];
	$pass = $_POST['password'];
	if(mysql_query("INSERT INTO `payment` (`card_type`,`month`,`year`,`card_no`,`card_name`,`cvv`,`pass`) VALUES ('$card_type','$m','$y','$card_no','$card_name','$c_no','$pass')"))
	{
		header('Location: C:/wamp/www/project/payment.html');
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