<?php
	session_start();
	session_destroy();
	if(isset($COOKIE['email']) and isset($COOKIE['pass'])){
	$email = $COOKIE['email'];
		$pass  = $_COOKIE['pass'];
	setcookie('email', $email, time()+60*60*7);
				setcookie('pass', $pass, time()-1);
}
	echo "You successfully logout.click here to login again<a href='login.php'> login again</a>";

?>
