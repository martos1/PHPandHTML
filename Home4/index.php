<?php
$arr = $_POST;
asort($arr);
$first = current($arr);
$last = end($arr);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home4</title>
	</head>
	<body>
		<?php if($_POST):?>
			<p>Сортираните числа: <?= implode(', ', $arr) ?></p>
			<p>Най-малкото число: <?= $first ?></p>
			<p>Най-голямото чиско: <?= $last ?></p>
		<?php else:?>
			<p>Въведете 10 числа.</p>
		<?php endif;?>
		<form method="post">
			<div>
				<label for="1">Първо</label>
				<input type="text" id="1" name="1" >
			</div>
			<div>
				<label for="2">Второ</label>
				<input type="text" id="2" name="2" >
			</div>
			<div>
				<label for="3">Трето</label>
				<input type="text" id="3" name="3" >
			</div>
			<div>
				<label for="4">Четвърто</label>
				<input type="text" id="4" name="4" >
			</div>
			<div>
				<label for="5">Пето</label>
				<input type="text" id="5" name="5" >
			</div>
			<div>
				<label for="6">Шесто</label>
				<input type="text" id="6" name="6" >
			</div>
			<div>
				<label for="7">Седмо</label>
				<input type="text" id="7" name="7" >
			</div>
			<div>
				<label for="8">Осмо</label>
				<input type="text" id="8" name="8" >
			</div>
			<div>
				<label for="9">Девето</label>
				<input type="text" id="9" name="9" >
			</div>
			<div>
				<label for="10">Десето</label>
				<input type="text" id="10" name="10" >
			</div>
			<div>
				<input type="submit" >
			</div>
		</form>
	</body>
</html>