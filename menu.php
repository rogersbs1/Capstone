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
	<p>Thank you, your order has been placed and will be ready at <b><span id="datetime"></span></b>.</p>
	</header>
	<script>
		var dt = new Date();
		var newDate = new Date(dt.getTime() + 30*60000);
		document.getElementById("datetime").innerHTML = newDate.toLocaleTimeString();
	</script>
	</body>
	</html>