<?php
require_once 'functions.php';
$name = getValue($_POST, 'name');
$lastName = getValue($_POST, 'lastName');
$date = getValue($_POST, 'date');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home6</title>
	</head>
	<body>
		<form method="post">
			<div>
				<label for="1">Име</label>
				<input type="text" id="1" name="name" value="<?= htmlentities($name)?>" />
			</div>
			<div>
				<label for="2">Фамилия</label>
				<input type="text" id="2" name="lastName" value="<?= htmlentities($lastName)?>" />
			</div>
			<div>
				<label for="3">Дата на раждане</label>
				<input type="date" id="3" name="date" value="<?= htmlentities($date)?>" />
			</div>
			<div>
				<input type="submit" >
			</div>
		</form>
	</body>
</html>