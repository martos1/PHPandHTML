<?php
require_once 'functions.php';
$a = getValue($_POST, 'a');
$b = getValue($_POST, 'b');
$func = getValue($_POST, 'func');
function result($a, $b, $func){
	if(!is_numeric($a) || !is_numeric($b)){
		return 'Некоректно въведени данни.';
	}
	if($func == 1){
		return $a + $b;
	}
	if($func == 2){
		return $a - $b;
	}
	if($func == 3){
		return $a * $b;
	}
	if($func == 4){
		return $a / $b;
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home1</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php if($_POST):?>
			<p> Резултата е: <?= result($a, $b, $func); ?><p>
		<?php endif;?>
		<form method="post">
			<div>
				<label for="a">Число А</label>
				<input type="text" id="a" name="a" >
			</div>
			<div>
				<label for="b">Число B</label>
				<input type="text" id="b" name="b" >
			</div>
			<div>
				<label for="func">Операция</label>
				<select id="func" name="func">
					<option value="1">Събиране</option>
					<option value="2">Изваждане</option>
					<option value="3">Умножение</option>
					<option value="4">Деление</option>
				</select>
			</div>
			<div>
				<input type="submit" >
			</div>
		</form>
	</body>
</html>