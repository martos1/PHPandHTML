<?php
require_once 'functions.php';
$name = getValue($_POST, 'userName');
$pass = getValue($_POST, 'pass');
$pass2 = getValue($_POST, 'pass2');
function passCheck($pass, $pass2){
	if($pass == $pass2){
		return md5($pass);
	} else {
		return 'Pass not same';
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home2</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php if($_POST && validateRequired($name)):?>
			<p>Име: <?= $name ?>
			<p>Парола: <?= passCheck($pass, $pass2) ?>
		<?php elseif ($_POST && !validateRequired($name)):?>
			</p>Грешно въведено име.</p>
		<?php endif;?>
		<form method="post">
			<div>
				<label for="userName">User Name</label>
				<input type="text" id="userName" name="userName" >
			</div>
			<div>
				<label for="pass">Password</label>
				<input type="password" id="pass" name="pass" >
			</div>
			<div>
				<label for="pass2">Enter Pass agen</label>
				<input type="password" id="pass2" name="pass2" >
			</div>
			<div>
				<input type="submit" >
			</div>
		</form>
	</body>
</html>