<html>
<header>

	<style>
	body{
		background-color: springgreen;
		font-family: tahoma;
		font-size: 52px;
		color: white;
		margin: 0 auto
	}
	input{
		color: black;
	}
	div{
		margin: 25px;
		background-color: rgba(0,0,0,0.5);
		padding: 20px;
		border-radius: 20px;
	}
	</style>

</header>
<body>
	<div>
		<?php
		$n1 = $_POST["n1"];
		$n2 = $_POST["n2"];
		?>
		first number is: <?php echo $n1; ?><br>
		second number is: <?php echo $n2; ?><br>
		square of first number is: <?php echo $n1**2?><br>
		square of second number is: <?php echo $n2**2?><br>
		sum of the two squares is: <?php echo $n1**2 + $n2**2?><br>
		difference of the two squares is: <?php echo $n1**2 - $n2**2?><br>
		product of the two squares is: <?php echo $n1**2 * $n2**2?><br>
	</div>
</body>
</html>
