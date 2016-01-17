<?php
function click(){
	if($_POST){
		$click = (int)$_POST['click'];
		return ++$click;
	} else {
		return $click = 0;
	}	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home8</title>
	</head>
	<body>
		<div>
			<p>Send form: <?= click() ?></p>
		</div>
		<form method="post">
			<div>
				<label>Name</label>
				<input type="text" name="name">
				<input type="hidden" name="click" value="<?= click() ?>"
			</div>
			<div>
				<input type="submit" >
			</div>
		</form>
	</body>
</html>