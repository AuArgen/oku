<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>If else</title>
	<style>
		*{
			font-size: 2rem;
		}
	</style>
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
		<input type="text" name="san2" placeholder="san2...">
		<button type="submit">Send</button>
	</form>
	<?php
		if (isset($_GET['san1']) && isset($_GET["san2"]) && $_GET["san1"] != '' && $_GET["san2"] != '') {

			$s1 = $_GET['san1'];
			$s2 = $_GET['san2'];
			if ($s1 > $s2) {
				echo 'Birinchi san ekinshi sandan chon!';
			} else if ($s1==$s2) {
				echo 'barabar';
			}else{
				echo 'ekinchi san birinchiden sandan chon';
			}

		} else if (isset($_GET['san1']) && $_GET['san1'] != ''){
			echo 'Ekinchi sandy kiyir!';
		}else if (isset($_GET['san2']) && $_GET['san2'] != ''){
			echo 'Birinchi sandy kiyir!';
		}else {
			echo 'Eki san kiiir!';
		}
		// && - Bul jana degen belgi, taktap aitkanda bir neche shart ten atkarylyshy kere bolso koiulat.
		// != bul bara bar emes degen belgi
		// isset maalymat bar jok ekenin teksherip beret
		// if bul eger degen tushunuk sharttyn birinchi kadamy
		// else if bul andai bolboso birok myndai bolso degen maanini beret
		// else anda ushundai bolsun degen joop ayagynda gana jazylat.
		// || bul je degen belgi misaly kelgen maalymat 3 je 5 bolso atkaryl desek bolot. oshondo kelgen maalymat 3 bolsoda shart kanattandyrylat oshondoi ele 5 bolsoda shart kanattandyrylat.
	?>
</body>
</html>