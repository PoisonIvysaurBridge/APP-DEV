<!DOCTYPE html>
<html>
<head>
	<title>Radio Box Control</title>
	<style>
	body{
		background-color: springgreen;
		font-family: tahoma;
		font-size: 25px;
		color: white;
		margin: auto;
		text-align: left;
	}
	</style>
</head>
<body>
	<div>
	<?php
		$answers = array($_POST[1],$_POST[2],
		$_POST[3],$_POST[4],$_POST[5]);
		
		for($i = 1; $i <= count($answers); $i++){
			if($_POST[$i] == "Y"){
				echo "Your Answer: Yes -- CORRECT<br>";
			}
			else{
				echo "Your Answer: No -- WRONG <br>";
				echo "Correct Answer: Yes<br>";
			}
		}/*
		echo "1.) Has black hair?<br>";
		if($_POST["one"] == "Y"){
			echo "Your Answer: Yes -- CORRECT<br>";
		}
		else{
			echo "Your Answer: No -- WRONG <br>";
			echo "Correct Answer: Yes<br>";
		}
		echo "2.) Born in the Philippines?<br>";
		if($_POST['two'] == "Y"){
			echo "Your Answer: Yes -- CORRECT<br>";
		}
		else{
			echo "Your Answer: No -- WRONG <br>";
			echo "Correct Answer: Yes<br>";
		}
		echo "3.) Loves sleep?<br>";
		if($_POST['three'] == "Y"){
			echo "Your Answer: Yes -- CORRECT<br>";
		}
		else{
			echo "Your Answer: No -- WRONG <br>";
			echo "Correct Answer: Yes<br>";
		}
		echo "4.) Lost hope in humanity?<br>";
		if($_POST['four'] == "Y"){
			echo "Your Answer: Yes -- CORRECT<br>";
		}
		else{
			echo "Your Answer: No -- WRONG <br>";
			echo "Correct Answer: Yes<br>";
		}
		echo "5.) Studying PHP?<br>";
		if($_POST['five'] == "Y"){
			echo "Your Answer: Yes -- CORRECT<br>";
		}
		else{
			echo "Your Answer: No -- WRONG <br>";
			echo "Correct Answer: Yes<br>";
		}*/
	?>
	</div>
</body>
</html>