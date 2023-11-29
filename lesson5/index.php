<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>If else</title>
</head>
<body>
	<h1>
		<center>
			If and Else
		</center>
	</h1>
	<hr>
	<form action="" method="get">
		<input type="text" name="san1" placeholder="san jaz">
	</form>
	<?php
		if (isset($_GET['san1'])) {
			$a = $_GET['san1'];
			if ($a > 5) {
				echo "$a > 5";
			}else if ($a == 5){
				echo "$a == 5";
			} else {
				echo "$a < 5";
			}
		} else {
			echo "Please enter your number...";
		}
	?>
</body>
</html>