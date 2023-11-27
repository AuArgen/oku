<?php
	$myInput1 = $_GET["myInput1"];
	$myAge = $_GET["myAge"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form action="">
		<input type="text" name="myInput1" value='<?php echo $myInput1;?>' placeholder="Enter your name...">
		<input type="number" name="myAge" value="<?php echo $myAge;?>" placeholder="Enter your age" >
		<button>Send</button>
	</form>


	<h1>
		FIO:
		<span>
			<?php
				echo $myInput1;
			?>
		</span>
		<span>
			<?php
				$year = date('Y');
				echo $year - $myAge;
			?>
		</span>
	</h1>
	<hr>
	<h2>
		<?php
				echo $myInput1;
			?>
	</h2>

	<p>
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consequatur rem dolorum, necessitatibus atque soluta, blanditiis, alias beatae non eaque magnam dolorem amet dolore laborum facilis. Dignissimos excepturi quae, repellendus.
		Ipsum, eligendi. Rem incidunt placeat ut enim. Unde commodi ad neque natus praesentium ab placeat ipsa soluta? Iure error, ab est, modi itaque rerum aliquam, beatae repellat animi magni fugit?
		<span>
			<?php
				echo $myInput1;
			?>
		</span>
	</p>

</body>
</html>