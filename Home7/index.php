<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['SERVER_SIGNATURE'];
$host = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home7</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div>
			<div><span>Your browser info:</span> <?= $browser ?></div>
			<div><span>Server info:</span> <?= $server ?></div>
			<div><span>Host info:</span> <?= $host ?></div>
		</div>
	</body>
</html>