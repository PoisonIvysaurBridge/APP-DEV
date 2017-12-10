<html>
<header>

	<style>
	body{
		background-color: springgreen;
		font-family: tahoma;
		font-size: 72px;
		color: gray;
	}
	input{
		color: black;
	}
	</style>

</header>
<body>

first number is: <?php echo $_POST["n1"]; ?><br>
second number is: <?php echo $_POST["n2"]; ?><br>
sum of the two numbers is: <?php echo $_POST["n1"] + $_POST["n2"]?>

</body>
</html>
