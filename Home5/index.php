<?php
require_once 'functions.php';
if($_REQUEST){
	function printResult($arr){
		$result = '';
		$len = count($arr);
		foreach($arr as $key=>$val){
			if($val >= 1){
				$result .= '<p>'. $key . '=>'. $val . ' Type: ' . gettype($val). '</p>';
			}
		}
		return $result;
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home5</title>
	</head>
	<body>
		<?php if($_REQUEST):?>
			<?= printResult($_REQUEST) ?>
		<?php endif;?>
		<form action="" method="post">
			<div>
				<label>Име</label>
				<input type="text" name="name">
			</div>
			<div>
				<label>Фамилия</label>
				<input type="text" name="lastName">
			</div>
			<div>
				<label>Години</label>
				<input type="text" name="age">
			</div>
			<div>
				<input type="submit">
			</div>
		</form>
	</body>
</html>