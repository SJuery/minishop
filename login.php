<?php
session_start();

foreach ($_SESSION['account'] as $account)
{
	if ($_POST['username'] === "admin")
		break ;
	if ($account['username'] === $_POST['username'])
	{
		if ($account['passwd'] === $_POST['passwd'])
		{
			$_SESSION['login'] = $_POST['username'];
			header('Location: index.php');
			exit ;
		}
		else
		{
			$_SESSION['error'] = "wrong passwd";
			header('Location: error.php');
			exit ;
		}
	}
}
$_SESSION['error'] = "login doesn't exist";
header('Location: error.php');
exit;
?>
