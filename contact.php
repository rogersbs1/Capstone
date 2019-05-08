<?php

    if(isset($_POST["send"])) {
        $recipient = "rogersbs1@appstate.edu";
        $subject = "Form to email message";
    }
        $sender = $_POST["sender"];
        $senderEmail = $_POST["senderEmail"];
        $message = $_POST["message"];
		$from = "From: $senderEmail \n";
        $mailBody = "Name: $sender\nEmail: $senderEmail\n\n$message";
        $headers = "To: $email\r\n";
        $success = mail("brandonsrogers01@gmail.com", "My Subject", $mailBody, $headers);
?>        

<!doctype html>
<html lang=”en”>
	<head>
	    <meta charset="utf-8">
		<title>Menu</title>
		<link href="newmarathon.css"
		rel="stylesheet">
	</head>
	<body>
	<header class="main-header">
	<div class="outer-div">
			<nav>
			<ul>
			<li><a href="newhome.html">Home</a></li>
            <li><a href="menu.html">Menu</a></li>
            <li><a href="directions.html">Directions</a></li>
			<li><a href="contact.html">Contact Us</a></li>
			<li style="float:right"><a href="about.html">About Our Business</a></li>
		</ul></nav>
	<p>Thank you for your feedback!</p>
	</header>
		</body>
	</html>


