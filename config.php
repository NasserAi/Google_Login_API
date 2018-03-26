<?php
	session_start();
	
	require_once "GoogleAPI/vendor/autoload.php";
	
	$gClient = new Google_Client();
	$gClient->setClientId("ENTER YOUR CLIENT ID HERE");
	$gClient->setClientSecret("ENTER YOUR CLIENT SECRET HERE");
	$gClient->setApplicationName("LOGIN APPLICATION");
	$gClient->setRedirectUri("http://localhost/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
