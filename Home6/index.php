<?php
print_r($_SERVER);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home3</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<form method="post">
			<div>
				<label for="1">Име</label>
				<input type="text" id="1" name="1" >
			</div>
			<div>
				<label for="2">Фамилия</label>
				<input type="text" id="2" name="2" >
			</div>
			<div>
				<label for="3">Дата на раждане</label>
				<input type="date" id="3" name="3" >
			</div>
			<div>
				<input type="submit" >
			</div>
		</form>
	</body>
</html>