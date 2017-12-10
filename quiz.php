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
	input[type=radio] {
		border: 0px;
		width: 20px;
		height: 20px;
	}
	</style>
</head>
<body>
	<h3>Multiple Choice Test</h3>
	<form action="score.php" method="post">
	1.) Has black hair?
	<input type="radio" name=1 value="Y"> Yes
	<input type="radio" name=1 value="N"> No
	<br>
	2.) Born in the Philippines?
	<input type="radio" name=2 value="Y"> Yes
	<input type="radio" name=2 value="N"> No
	<br>
	3.) Loves sleep?
	<input type="radio" name=3 value="Y"> Yes
	<input type="radio" name=3 value="N"> No
	<br>
	4.) Lost hope in humanity?
	<input type="radio" name=4 value="Y"> Yes
	<input type="radio" name=4 value="N"> No
	<br>
	5.) Studying PHP?
	<input type="radio" name=5 value="Y"> Yes
	<input type="radio" name=5 value="N"> No
	<br>
	<input type="submit">
	</form>
	
</body>
</html>