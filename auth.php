<?php

if (isset($_GET["uname"]))
	$uname = $_GET["uname"];

if (isset($_GET["psw"]))
	$psw = $_GET["psw"];

if (isset($psw) && (isset($uname)))
{
	$auth_table = json_decode(file_get_contents("users.txt"), false);
	foreach ($auth_table as $user)
	{
		if (($user->name == $uname) && ($user->psw == $psw))
		{
			setcookie("name", $user->name);
			setcookie("token", $user->token);

			header("Location: index.php");
			return;
		}
	}
	header("Location: login.php");
}
?>