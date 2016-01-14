<?php
require_once 'functions.php';
$gradus = getValue($_POST, 'gradus');
$convert = getValue($_POST, 'convert');
function convertTo($gradus, $conv) {
	if(!is_numeric($gradus)){
		return 'Не сте въвели число';
	}
	if($conv == 1) {
		$result = $gradus * 1.8 + 32;
	}
	if($conv == 2) {
		$result = (5 / 9) * ($gradus - 32);
	}
	return 'Резултат: ' . $result;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home3</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php if($_POST):?>
			<p> <?= convertTo($gradus, $convert); ?></p>
		<?php endif;?>
		<form method="post">
			<div>
				<label for="gradus">Градуси</label>
				<input type="text" id="gradus" name="gradus" >
			</div>
			<div>
				<label for="pass">Password</label>
				<select name="convert">
					<option value="1">C to F</option>
					<option value="2">F to C</option>
				</select>
			</div>
			<div>
				<input type="submit" >
			</div>
		</form>
	</body>
</html>