<?php

include 'db_connection.php';

$conn = OpenCon();

echo "Conectat cu succes";

function NewUser()
{
	$userName = $_POST['username'];
	$password =  $_POST['psw'];
	$email = $_POST['email'];
	$query = "INSERT INTO accountstable (username,paswword,email) VALUES ('$userName','$password','$email')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM accountstable WHERE userName = '$_POST[username]' AND pass = '$_POST[psw]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		NewUser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
CloseCon($conn);
?>